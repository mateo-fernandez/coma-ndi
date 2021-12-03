<?php
require_once File::getApp(["models","Model.php"]);

class ModelProposerPersonne extends Model
{
    protected static $objet = "personne";
    protected static $primary = "idPersonne";

    protected $idPersonne;
    protected $idUtilisateur;
    protected $nom;
    protected $prenom;
    protected $nationalite; // CAN BE NULL
    protected $dateNaissance; // CAN BE NULL
    protected $dateDeces; // CAN BE NULL
    protected $biographie; // CAN BE NULL
    protected $role; // Sauveur ou Sauvé
    protected $derniereModif; // Automatiquement rempli par le SGBD

    public function save(){
        try{
            $table_name = ucfirst(self::$objet);
            $sql = "INSERT INTO $table_name(idPersonne,nom,prenom,derniereModif,role";
            $endSql = "VALUES(:idPersonne,:nom,:prenom,:derniereModif,:idUtilisateur,:role";

            $data = [
                "idPersonne" => $this->idPersonne,
                "nom" => $this->nom,
                "prenom" => $this->prenom,
                "idUtilisateur" => $this->idUtilisateur,
                "role" => $this->role
            ];

            if($this->nationalite != null){
                $sql .= ",nationalite";
                $endSql .= ",:nationalite";
                $data["nationalite"] = $this->nationalite;
            }

            if($this->dateNaissance != null){
                $sql .= ",dateNaissance";
                $endSql .= ",:dateNaissance";
                $data["dateNaissance"] = $this->dateNaissance;
            }

            if($this->dateDeces != null){
                $sql .= ",dateDeces";
                $endSql .= ",:dateDeces";
                $data["dateDeces"] = $this->dateDeces;
            }

            if($this->biographie != null){
                $sql .= ",biographie";
                $endSql .= ",:biographie";
                $data["biographie"] = $this->biographie;
            }

            $sql .= ") ".$endSql.") ";
            $req_prep = self::getPdo()->prepare($sql);
            $req_prep->execute($data);

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