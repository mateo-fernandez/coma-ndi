<?php
require_once File::getApp(["models","Model.php"]);

class ModelProposerBateau extends Model
{
    protected static $objet = "bateau";
    protected static $primary = "id";

    protected $id;
    protected $nom;
    protected $modele;
    protected $nationalite; // CAN BE NULL
    protected $anneeDebutUtilisation; // CAN BE NULL
    protected $anneeFinUtilisation; // CAN BE NULL
    protected $histoire; // CAN BE NULL
    protected $derniereModif;


    public function save(){
        try{
            $table_name = ucfirst(self::$objet);
            $sql = "INSERT INTO $table_name(id,nom,prenom";
            $endSql = "VALUES(:id,:nom,:prenom";

            $data = [
                "id" => $this->id,
                "nom" => $this->nom,
                "prenom" => $this->prenom
            ];

            if($this->nationalite != null){
                $sql .= ",nationalite";
                $endSql .= ",:nationalite";
                $data["nationalite"] = $this->nationalite;
            }

            if($this->anneeDebutUtilisation != null){
                $sql .= ",anneeDebutUtilisation";
                $endSql .= ",:anneeDebutUtilisation";
                $data["anneeDebutUtilisation"] = $this->anneeDebutUtilisation;
            }

            if($this->anneeFinUtilisation != null){
                $sql .= ",anneeFinUtilisation";
                $endSql .= ",:anneeFinUtilisation";
                $data["anneeFinUtilisation"] = $this->anneeFinUtilisation;
            }

            if($this->histoire != null){
                $sql .= ",histoire";
                $endSql .= ",:histoire";
                $data["histoire"] = $this->histoire;
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