<?php

require '../core/Manager.php';
require '../core/View.php';


class AdminController
{
    public function index()
    {
        $view = new View('admin/index.html.php');
        $view->render();
    }
}