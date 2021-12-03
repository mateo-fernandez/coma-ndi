<?php
require_once File::getApp(["models","Model.php"]);

class ModelPersonne extends Model
{
    protected static $objet = "personne";
    protected static $primary = "idPersonne";

    protected $idPersonne;
    protected $nom;
    protected $prenom;
    protected $nationalite; // CAN BE NULL
    protected $dateNaissance; // CAN BE NULL
    protected $dateDeces; // CAN BE NULL
    protected $biographie; // CAN BE NULL
    protected $role; // Sauveur ou Sauvé
    protected $derniereModif;

    public function save(){
        try{
            $table_name = ucfirst(self::$objet);
            $sql = "INSERT INTO $table_name(nom,prenom,role,derniereModif";
            $endSql = "VALUES(:nom,:prenom,:role,:derniereModif";

            $data = [
                "nom" => $this->nom,
                "prenom" => $this->prenom,
                "derniereModif" => $this->derniereModif,
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