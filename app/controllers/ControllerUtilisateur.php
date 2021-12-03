<?php

class ControllerUtilisateur
{
    private static $object = "utilisateur";

    public static function connexion(){
        $pagetitle = "Connexion";
        $view = "connexion";
        require_once File::getApp(array("views", "view.php"));
    }

    public static function inscription(){

    }

    public static function created(){
        require_once File::getApp(["models","ModelUtilisateur.php"]);
        if(isset($_POST["nom"]) && isset($_POST["prenom"]) &&
            isset($_POST["adresseEmail"]) &&
            isset($_POST["motDePasse"]) &&
            isset($_POST["motDePasseConfirmation"]) &&
            filter_var($_POST["adresseEmail"], FILTER_VALIDATE_EMAIL) &&
            $_POST["motDePasse"] == $_POST["motDePasseConfirmation"])
        {
           echo "oui";
        }
        else{
            echo "non";
        }
    }

    public static function read(){
        require_once File::getApp(["models","ModelUtilisateur.php"]);

    }

    public static function readAll(){
        require_once File::getApp(["models","ModelUtilisateur.php"]);

    }

    public static function removed(){
        require_once File::getApp(["models","ModelUtilisateur.php"]);

    }
}