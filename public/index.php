<?php


if(!empty($_GET['controller']))
{
    $controller = ucfirst($_GET['controller']) . 'Controller';
}
else
{
    $controller = 'HomeController';
}

$controllerFileName = '../src/controllers/' . $controller . '.php';

if(file_exists($controllerFileName)) {

    if (!empty($_GET['action'])) {
        require $controllerFileName;
        $instanceController = new $controller;
        $function = $_GET['action'];
        $action = $instanceController->$function();
    } else {
        require '../src/controllers/' . $controller . '.php';
        $instanceController = new $controller;
        $action = $instanceController->index();
    }
}
else
{
    echo 'Error: 404';
}

if(method_exists($instanceController, 'render')){
    $instanceController->render($action);
}