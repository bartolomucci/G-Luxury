<?php

require '../core/Manager.php';
require '../core/View.php';


class AdminController
{
    public function index()
    {
        require_once '../src/managers/VehicleManager.php';
        require_once '../src/managers/OffresManager.php';
        $instanceOffers = new OffresManager();
        $instanceVehicule = new VehicleManager();
        $view = new View('admin/index.html.php', [
            'vehicles' => $instanceVehicule->getAllVehicles(),
            'offers' => $instanceOffers->getAllOffres()
        ]);
        $view->render();
    }

    public function createVehicle()
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

    public function updateVehicle()
    {
        $view = new View('admin/update-vehicule.html.php');
        $view->render();
        require '../src/managers/VehicleManager.php';
        $vehiculeManager = new VehicleManager();
        $vehicule = $vehiculeManager->getVehicleById();
        if(isset($_POST['submit']))
        {
            $exec = $vehiculeManager->updateVehicleById($_POST['brand'], $_POST['model'], $_POST['color'], $_POST['fuel'], $_POST['horsepower'], $_POST['fiscalpower'], $_POST['maximum_speed'], $_POST['car_image'], $_POST['zero_hundred'], $_GET['id_vehicle']);
            header('Location: /?controller=admin');
        }
    }

}