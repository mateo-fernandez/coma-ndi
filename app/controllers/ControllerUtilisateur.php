<?php

class ControllerUtilisateur
{
    private static $object = "utilisateur";

    public static function connexion(){
        $pagetitle = "Connexion";
        $view = "connexion";
        require_once File::getApp(array("views", "view.php"));
    }

    public static function connected(){
        require_once File::getApp(["models","ModelUtilisateur.php"]);
        if(isset($_POST["adresseEmail"]) && isset($_POST["motDePasse"])){
            if( $user = ModelUtilisateur::select($_POST["adresseEmail"])){
                if(Security::hash($_POST["motDePasse"]) == $user->get("motDePasse")){
                    echo "oui";
                }
                else{
                    $pagetitle = "Connexion";
                    $view = "connexion";
                    require_once File::getApp(array("views", "view.php"));
                }
            }
            else{
                $pagetitle = "Connexion";
                $view = "connexion";
                require_once File::getApp(array("views", "view.php"));
            }

        }
    }

    public static function inscription(){
        $pagetitle = "Inscription";
        $view = "inscription";
        require_once File::getApp(array("views", "view.php"));
    }

    public static function created(){
        require_once File::getApp(["models","ModelUtilisateur.php"]);
        if(isset($_POST["nom"]) && isset($_POST["prenom"]) &&
            isset($_POST["adresseEmail"]) &&
            isset($_POST["motDePasse"]) &&
            isset($_POST["motDePasseConfirmation"]) &&
            filter_var($_POST["adresseEmail"], FILTER_VALIDATE_EMAIL) &&
            !ModelUtilisateur::exists($_POST["adresseEmail"]) &&
            $_POST["motDePasse"] == $_POST["motDePasseConfirmation"])
        {
            (new ModelUtilisateur([
               "nom" => $_POST["nom"],
                "prenom" => $_POST["prenom"],
                "adresseEmail" => $_POST["adresseEmail"],
                "motDePasse" => Security::hash($_POST["motDePasse"]),
                "role" => "Colaborateur"
           ]))->save();
        }
        else{
            if(!isset($_POST["nom"])){
                $errorNom = "Veuillez donner votre nom de famille";
            }

            if(!isset($_POST["prenom"])){
                $errorPrenom = "Veuillez donner votre prénom";
            }

            if(isset($_POST["adresseEmail"])){
                $errorAdresseEmail = "Veuillez donner une adresse email";
            }

            else{
                if(!filter_var($_POST["adresseEmail"], FILTER_VALIDATE_EMAIL)){
                    $errorAdresseEmail = "Veuillez donner une adresse email valide";
                }
                else{
                    if(ModelUtilisateur::exists($_POST["adresseEmail"])){
                        $errorAdresseEmail = "Cette adresse email est déjà utilisé par un utilisateur du site";
                    }
                }
            }
            if(!isset($_POST["motDePasse"]) ||
                !isset($_POST["motDePasseConfirmation"])){
                    $errorMotDepasse = "Veuillez donner des mots de passse valides";
            }
            else{
                if($_POST["motDePasse"] != $_POST["motDePasseConfirmation"]){
                    $errorMotDepasse = "Veuillez donner des mots de passse valides";
                }
            }
            $pagetitle = "Inscription";
            $view = "inscription";
            require_once File::getApp(array("views", "view.php"));
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