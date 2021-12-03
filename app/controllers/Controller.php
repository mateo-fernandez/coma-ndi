<?php
// Metre les require_once des futurs Controllers

class Controller {
  protected static $object = "";

  public static function home(): void {
    $page_title = "Accueil";
    $view = "home";
    require_once File::getApp(array("views", "view.php"));
  }

  public static function error(string $title, string $details): void {
    require File::getApp(array("views", "toast.php"));
  }

}
