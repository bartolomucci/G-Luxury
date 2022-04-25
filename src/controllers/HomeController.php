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
    

    public function display()
    {
        require_once '../src/managers/VehiculeManager.php';
        $instanceVehicule = new VehiculeManager();
        $view = new View('home/display-cars.html.php', [
            'vehicules' => $instanceVehicule->getAllVehicule()
        ]);
        $view->render();
        
    }

    public function offers()
    {
        require_once '../src/managers/OffresManager.php';
        $instanceOffres = new OffresManager();
        $view = new View('home/offers.html.php', [
            'offres' => $instanceOffres->getAllOffres()
        ]);
        $view->render();
    }

}