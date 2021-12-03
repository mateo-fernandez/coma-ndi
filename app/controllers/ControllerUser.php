<?php
require_once File::getApp(array("models", "ModelUser.php"));

class ControllerUser {
    private static $object = "user";

    public static function login() {
        $page_title = "Connexion";
        $view = "login";
        require_once File::getApp(array("views", "view.php"));
    }

    public static function connected() {
        if (isset($_POST["adresseEmail"]) && isset($_POST["motDePasse"])) {
            $user = ModelUser::getByEmail($_POST["adresseEmail"]);
            if (isset($user) && $user != false) {
                //if (Security::hash($_POST["motDePasse"]) == $user->get("motDePasse")) {
                    $_SESSION["isLogged"] = true;
                    $_SESSION["userId"] = $user->get("idUtilisateur");
                //} else {
                //    self::login();
                //}
            } else {
                self::login();
            }
        }
        Controller::home();
    }

    public static function register() {
        $page_title = "Inscription";
        $view = "register";
        require_once File::getApp(array("views", "view.php"));
    }

    public static function created() {
        if (isset($_POST["nom"]) && isset($_POST["prenom"]) &&
            isset($_POST["adresseEmail"]) &&
            isset($_POST["motDePasse"]) &&
            isset($_POST["motDePasseConfirmation"]) &&
            filter_var($_POST["adresseEmail"], FILTER_VALIDATE_EMAIL) &&
            !ModelUser::exists($_POST["adresseEmail"]) &&
            $_POST["motDePasse"] == $_POST["motDePasseConfirmation"]) {
            (new ModelUser([
                "nom" => $_POST["nom"],
                "prenom" => $_POST["prenom"],
                "adresseEmail" => $_POST["adresseEmail"],
                "motDePasse" => Security::hash($_POST["motDePasse"]),
                "role" => "Collaborateur"
            ]))->save();
            Controller::home();
        } else {
            if (!isset($_POST["nom"])) {
                $errorNom = "Veuillez donner votre nom de famille";
            }

            if (!isset($_POST["prenom"])) {
                $errorPrenom = "Veuillez donner votre prénom";
            }

            if (isset($_POST["adresseEmail"])) {
                $errorAdresseEmail = "Veuillez donner une adresse email";
            } else {
                if (!filter_var($_POST["adresseEmail"], FILTER_VALIDATE_EMAIL)) {
                    $errorAdresseEmail = "Veuillez donner une adresse email valide";
                } else {
                    if (ModelUser::exists($_POST["adresseEmail"])) {
                        $errorAdresseEmail = "Cette adresse email est déjà utilisé par un utilisateur du site";
                    }
                }
            }
            if (!isset($_POST["motDePasse"]) || !isset($_POST["motDePasseConfirmation"])) {
                $errorMotDepasse = "Veuillez donner des mots de passse valides";
            } else {
                if ($_POST["motDePasse"] != $_POST["motDePasseConfirmation"]) {
                    $errorMotDepasse = "Veuillez donner des mots de passse valides";
                }
            }
            self::register();
        }
    }

    public static function disconnect() {
        $_SESSION["isLogged"] = false;
        unset($_SESSION["userId"]);
        Controller::home();
    }
}