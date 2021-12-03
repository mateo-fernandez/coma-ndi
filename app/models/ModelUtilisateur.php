<?php
require_once File::getApp(["models","Model.php"]);

class ModelUtilisateur extends Model
{
    protected static $objet = "utilisateur";
    protected static $primary = "idUtilisateur";

    protected $idUtilisateur;
    protected $nom;
    protected $prenom;
    protected $adresseEmail;
    protected $motDePasse;
    protected $role;

    public function save(){
        try{
            $table_name = ucfirst(self::$objet);
            $req_prep = self::getPdo()->prepare(
                "INSERT INTO $table_name(nom,prenom,adresseEmail,motDePasse,role)
                         VALUES(:nom,:prenom,:adresseEmail,:motDePasse,:role)"
            );
            $req_prep->execute([
                "nom" => $this->nom,
                "prenom" => $this->prenom,
                "adresseEmail" => $this->adresseEmail,
                "motDePasse" => $this->motDePasse,
                "role" => $this->role
            ]);
        }catch (PDOException $e){
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                ControllerGeneral::error();
            }
            die();
        }
    }

    public static function exists($adresseEmail){
        try{
            $table_name = ucfirst(self::$objet);
            $req_prep = self::getPdo()->prepare(
                "SELECT COUNT(*) FROM $table_name WHERE adresseEmail = :adresseEmail"
            );
            $req_prep->execute([
                "adresseEmail" => $adresseEmail
            ]);

            return $req_prep->fetch()[0] == 1;
        }catch (PDOException $e){
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                ControllerGeneral::error();
            }
            die();
        }
    }
}