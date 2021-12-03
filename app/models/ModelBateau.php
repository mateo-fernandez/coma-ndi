<?php
require_once File::getApp(["models","Model.php"]);

class ModelBateau extends Model
{
    protected static $objet = "bateau";
    protected static $primary = "idBateau";

    protected $idBateau;
    protected $nomBateau;
    protected $modele;
    protected $nationalite; // CAN BE NULL
    protected $anneeDebutUtilisation; // CAN BE NULL
    protected $anneeFinUtilisation; // CAN BE NULL
    protected $histoire; // CAN BE NULL
    protected $derniereModif;

    public function save(){
        try{
            $table_name = ucfirst(self::$objet);
            $sql = "INSERT INTO $table_name(nomBateau,modele,derniereModif";
            $endSql = "VALUES(:nomBateau,:modele,:derniereModif";

            $data = [
                "nomBateau" => $this->nomBateau,
                "modele" => $this->modele,
                "derniereModif" => $this->derniereModif
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