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
    
    public function rating()
    {
        $view = new View('home/rating.html.php');
        $view->render();
    }


    public function show()
    {
        require_once '../src/managers/VehicleManager.php';
        $instanceVehicule = new VehicleManager();
        $view = new View('home/show-cars.html.php', [
            'vehicles' => $instanceVehicule->getAllVehicles()
        ]);
        $view->render();
        
    }

    public function offersbyId()
    {
        require_once '../src/managers/VehicleManager.php';
        require_once '../src/managers/OffresManager.php';
        $instanceVehicule = new VehicleManager();
        $instanceOffres = new OffresManager();
        $view = new View('home/offers-by-id.html.php', [
            'offers' => $instanceOffres->getOffersbyVehicleId(),
            'vehicle' => $instanceVehicule->getVehicleById()
        ]);
        $view->render();
    }


}