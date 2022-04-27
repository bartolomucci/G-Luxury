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
    }

    public function createVehiclePOST()
    {
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
        require '../src/managers/VehicleManager.php';
        $vehiculeManager = new VehicleManager(); 
        $view = new View('admin/update-vehicle.html.php', [
            'vehicle' => $vehiculeManager->getVehicleById()
        ]);
        $view->render();
    }

    public function updateVehiclePOST()
{
    if(isset($_POST['submit']))
    {
        require '../src/managers/VehicleManager.php';
        $vehiculeManager = new VehicleManager();
        $exec = $vehiculeManager->updateVehicleById($_POST['brand'], $_POST['model'], $_POST['color'], $_POST['fuel'], $_POST['horsepower'], $_POST['fiscalpower'], $_POST['maximum_speed'], $_POST['car_image'], $_POST['zero_hundred'], $_GET['id_vehicle']);
        $view = new View('admin/index.html.php');
        header('Location: /?controller=admin');
    }
}

public function deleteVehicle()
{
    require '../src/managers/VehicleManager.php';
    $vehiculeManager = new VehicleManager(); 
    $view = new View('admin/delete-vehicle.html.php', [
        'vehicle' => $vehiculeManager->getVehicleById()
    ]);
    $view->render();
}


public function deleteVehiclePOST()
{
    if(isset($_POST['submit']))
    {
        if($_POST['confirm'] == "yes")
        {
            require '../src/managers/VehicleManager.php';
            $vehiculeManager = new VehicleManager();
            $exec = $vehiculeManager->deleteVehicleById($_GET['id_vehicle']);
            $view = new View('admin/index.html.php');
            header('Location: /?controller=admin');

        }
        else
        {
            $view = new View('admin/index.html.php');
            header('Location: /?controller=admin');
        }
    }
}




}

