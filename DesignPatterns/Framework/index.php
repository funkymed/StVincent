<?php

namespace App;

use Classes\Container;
use Classes\Services\Request;
use Classes\Services\Router;
use Classes\Services\Database;
use Controller\IndexController;

require_once'autoload.php';

Autoloader::register();

$request = Request::getInstance();
$router = Router::getInstance();
$database = Database::getInstance();

$container = new Container();
$container->add('request', $request);
$container->add('router', $router);
$container->add('database', $database);

$controller = $router->get(Router::VAR_CONTROLLER,'index');
$className = UCFirst($controller).'Controller';

$rendered = false;

if (file_exists(sprintf('Controller/%s.php', $className))) {
    $className = "Controller\\".$className;
    $controller = new $className($container);
    $action = $router->get(Router::VAR_ACTION,'index');
    if ($action && method_exists($controller, $action)) {
        $controller->$action();
        $rendered = true;
    }
}

if (!$rendered) {
    $controller = new IndexController($container);
    $controller->notfound();
}
