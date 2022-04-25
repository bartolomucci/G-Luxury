<?php

require '../core/Manager.php';
require '../core/View.php';


class UsersController
{
    public function index()
    {
        $view = new View('users/index.html.php');
        $view->render();    
    }

    public function register()
    {
        $view = new View('users/register.html.php');
        $view->render();

        if(isset($_POST['submit']))
        {
            $mot_de_passe = $_POST['mot_de_passe'];
            $hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
            require_once '../core/Manager.php';
            require_once '../src/managers/UtilisateurManager.php';
            $instance = new UtilisateurManager();
            $instance->addUtilisateur($_POST['prenom'], $_POST['nom'], $_POST['ville'], $_POST['email'], $hash, $_POST['date_naissance']);
            header('Location: /?controller=users&action=success');
        }
    }

    public function login()
    {
        $view = new View('users/login.html.php');
        $view->render();
    }
    

    public function success()
    {
        $view = new View('users/success.html.php');
        $view->render();
    }


}