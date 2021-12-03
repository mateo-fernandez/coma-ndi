<?php
session_start();

class SessionUtilisateur
{
    public static function create($idUtilisateur,$role){
        $_SESSION["user"] = [
            "idUtilisateur" => $idUtilisateur,
            "role" => $role
        ];
    }

    public static function getIdUtilisateur(){
        if(self::isCreate()){
            return $_SESSION["user"]["email"];
        }
        return false;
    }

    public static function getRole(){
        if(self::isCreate()){
            return $_SESSION["user"]["role"];
        }
        return false;
    }

    public static function getNom(){
        if(self::isCreate()){
            return $_SESSION["user"]["nom"];
        }
        return false;
    }

    public static function getPrenom(){
        if(self::isCreate()){
            return $_SESSION["user"]["prenom"];
        }
        return false;
    }

    public static function getSessionId(){
        return session_id();
    }

    public static function isCreate(){
        return isset($_SESSION["user"]);
    }

    public static function destroy(){
        if(isset($_SESSION["user"])){
            unset($_SESSION["user"]);
            session_destroy();
        }
    }
}