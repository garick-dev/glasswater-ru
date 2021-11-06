<?php

namespace app\system\engine;

final class Router
{
    private array $routes;
    private string $class;
    private array $params;
    private $registry;

    public function __construct($registry)
    {
        $this->registry = $registry;
        $routesConfig = require 'app/system/config/routes.php';
        foreach ($routesConfig as $key => $val) {
            $this->add($key, $val);
        }

    }

    public function run()
    {
        if ($this->match() && $this->connectController()) {
            if ($this->checkClass() && $this->checkMethod()) {
                $controller = new $this->class($this->params, $this->registry);
                $action = $this->params['action'];
                $document = $this->registry->get('document');
                $document->setPage($this->params['controller']);
                $controller->$action();
            } else {
                echo '404';
            }
        } else {
            echo '404';
        }
    }

    private function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    private function match(): bool
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    private function connectController()
    {
        $path = "app/" . $this->params['scope'] . "/controller/" . $this->params['folder'] . "/" . $this->params['controller'] . ".php";
        if (file_exists($path)) {
            return require_once $path;
        }
        return false;
    }

    private function checkClass(): bool
    {
        $this->class = "app\\" . $this->params['scope'] . "\controller\\" . $this->params['folder'] . "\Controller" . ucfirst($this->params['controller']);
        if (class_exists($this->class)) {
            return true;
        }
        return false;
    }

    private function checkMethod(): bool
    {
        if (method_exists($this->class, $this->params['action'])) {
            return true;
        }
        return false;
    }
}