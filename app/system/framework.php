<?php

use app\system\engine\Loader;
use app\system\engine\Registry;
use app\system\engine\Router;
use app\system\lib\Document;
use app\system\lib\Language;

session_start();

$registry = new Registry;

$document = new Document;
$registry->set('document', $document);

$language = new Language();
$registry->set('language', $language);

$loader = new Loader($registry);
$registry->set('load', $loader);

$router = new Router($registry);
$registry->set('router', $router);

$router->run();