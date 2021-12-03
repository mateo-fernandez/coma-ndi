<?php
require_once File::getApp(["models","Model.php"]);

class ModelProposerArticle extends Model
{
    protected static $objet = "bateau";
    protected static $primary = "id";

    protected $id;
    protected $contenu;
    protected $derniereModif;

    public function save(){
        try{
            $table_name = ucfirst(self::$objet);
            $req_prep = self::getPdo()->prepare(
                "INSERT INTO $table_name(id,contenu)
                         VALUES(:id,:contenu)"
            );
            $req_prep->execute([
                "id" => $this->id,
                "contenu" => $this->contenu
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

