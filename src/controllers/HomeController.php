<?php

require '../core/Manager.php';
require '../core/View.php';

class HomeController
{
    public function index()
    {
        $view = new View('home/index.html.php');
        $view->render();
    }
    
}