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

    public function create()
    {
        $view = new View('admin/create-vehicule.html.php');
        $view->render();
        if(isset($_POST['submit']))
        {
            require '../src/managers/VehicleManager.php';
            $vehiculeManager = new VehicleManager();
            $exec = $vehiculeManager->insertVehicule($_POST['brand'], $_POST['model'], $_POST['color'], $_POST['fuel'], $_POST['horsepower'], $_POST['fiscalpower'], $_POST['maximum_speed'], $_POST['car_image'], $_POST['zero_hundred']);
            header('Location: /?controller=admin');
        }
    }

}