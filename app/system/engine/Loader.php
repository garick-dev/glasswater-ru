<?php

namespace app\system\engine;

final class Loader
{
    private $registry;

    public function __construct($registry)
    {
        $this->registry = $registry;
    }

    public function controller($path)
    {
        $pathToController = "app/" . WORK_AREA . "/controller/" . $path . ".php";
        if (file_exists($pathToController)) {
            require_once $pathToController;
            $classPath = $this->getClassPath($pathToController, $path, 'controller');
            if (class_exists($classPath)) {
                $controller = new $classPath('', $this->registry);
                return $controller->index();
            }
        }
        return "error";
    }

    private function getClassPath($pathToController, $path, $type): string
    {
        $tokens = token_get_all(file_get_contents($pathToController));
        $nameController = ucfirst($type) . ucfirst(substr(strrchr($path, '/'), 1));
        $folder = substr($path, 0, strrpos($path, '/'));
        foreach ($tokens as $token) {
            if (is_array($token) && $token[1] === $nameController) {
                return 'app\\' . WORK_AREA . '\\' . $type . '\\' . $folder . '\\' . $nameController;
            }
        }
        return 'error';
    }

    public function model($path)
    {
        $pathToModel = "app/" . WORK_AREA . "/model/" . $path . ".php";
        if (file_exists($pathToModel)) {
            require_once $pathToModel;
            $classPath = $this->getClassPath($pathToModel, $path, 'model');
            if (class_exists($classPath)) {
                return new $classPath('');
            }
        }
        return "error";
    }

    public function view($path, $vars): bool|string
    {
        extract($vars);
        ob_start();

        require('app/' . WORK_AREA . '/view/' . $path . '.php');

        return ob_get_clean();
    }

    public function language($path)
    {
        return $this->registry->get('language')->load($path);
    }
}