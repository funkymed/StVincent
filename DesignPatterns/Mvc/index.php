<?php

/**
 * Author Cyril Pereira
 * Bootstrap microframework.
 */
include 'Request.php';
include 'Controller/ControllerAbstract.php';
include 'Controller/IndexController.php';

$request = Request::getInstance();

$controller = $request->get('controller', 'index');
$className = UCFirst($controller).'Controller';

$rendered = false;

if (file_exists(sprintf('Controller/%s.php', $className))) {
    if (class_exists($className)) {
        $controller = new $className();
        $action = $request->get('action', 'index');
        if ($action && method_exists($controller, $action)) {
            $controller->$action();
            $rendered = true;
        }
    }
}

if (!$rendered) {
    $controller = new IndexController();
    $controller->notfound();
}
