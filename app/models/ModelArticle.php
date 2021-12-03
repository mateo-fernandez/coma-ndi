<?php
require_once File::getApp(["models","Model.php"]);

class ModelArticle extends Model
{
    protected static $objet = "article";
    protected static $primary = "idArticle";

    protected $idArticle;
    protected $contenu;
    protected $derniereModif;

    public function save(){
        try{
            $table_name = ucfirst(self::$objet);
            $req_prep = self::getPdo()->prepare(
                "INSERT INTO $table_name(contenu,derniereModif)
                         VALUES(:contenu,:derniereModif)"
            );
            $req_prep->execute([
                "contenu" => $this->contenu,
                "derniereModif" => $this->derniereModif
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
}

