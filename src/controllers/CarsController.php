<?php

require '../core/Manager.php';
require '../core/View.php';

class CarsController
{
    public function index()
    {
        $view = new View('cars/index.html.php');
        $view->render();
    }
}