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
            require '../src/managers/VehiculeManager.php';
            $vehiculeManager = new VehiculeManager();
            $exec = $vehiculeManager->insertVehicule($_POST['marque'], $_POST['modele'], $_POST['couleur'], $_POST['carburant'], $_POST['prix'], $_POST['puissance_din'], $_POST['puissance_fiscale'], $_POST['image'], $_POST['vitesse_maximum'], $_POST['zero_a_cent']);
        }
    }

}