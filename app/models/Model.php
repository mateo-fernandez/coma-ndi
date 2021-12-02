<?php
require_once File::getApp(array("lib", "Conf.php"));

class Model {
  private static $pdo;

  private static function init() {
    $hostname = Conf::getHostname();
    $database_name = Conf::getDatabase();
    $login = Conf::getLogin();
    $password = Conf::getPassword();

    try {
      self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name;charset=utf8", $login, $password);
    } catch (PDOException $e) {
      if (Conf::getDebug()) {
        echo $e->getMessage(); // affiche un message d'erreur
      } else {
        echo "Une erreur est survenue <a href=\"\"> retour a la page d'accueil </a>";
      }
      die();
    }
  }

  public static function getPdo() {
    if (is_null(self::$pdo))
      Model::init();
    return self::$pdo;
  }

  // -- CRUD Methods ---

  public static function selectAll() {
    $table_name = static::$object;
    $class_name = "Model" . ucfirst($table_name);
    // TODO: changer le nom de la BD
    $sql = "SELECT * FROM `proj__" . $table_name . "`;";
    try {
      $db = self::getPdo();
      $rep = $db->query($sql);
      $rep->setFetchMode(PDO::FETCH_CLASS, $class_name);
      $tab = $rep->fetchAll();

    } catch (PDOException $e) {
      if (Conf::getDebug()) {
        echo $e->getMessage();
      }
      return false;
    }

    return $tab ?? false;
  }

  public static function select($primaryValue) {
    $table_name = static::$object;
    $class_name = "Model" . ucfirst($table_name);
    $pkey = static::$primary;
    //TODO: changer le nom de la BD
    $sql = "SELECT * FROM `proj__" . $table_name . "` WHERE `" . $pkey . "`=:tag;";
    try {

      $db = self::getPdo();
      $rep = $db->prepare($sql);
      $rep->execute(array("tag" => $primaryValue));
      $rep->setFetchMode(PDO::FETCH_CLASS, $class_name);
      $el = $rep->fetch();
    } catch (PDOException $e) {
      if (Conf::getDebug()) {
        echo $e->getMessage();
      }
      return false;
    }

    return $el ?? false;
  }

}

