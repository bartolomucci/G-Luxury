<?php

require '../core/Manager.php';
require '../core/View.php';

class ErrorController
{
    public function index()
    {
        $view = new View('error/error.html.php');
        $view->render();
    }
}