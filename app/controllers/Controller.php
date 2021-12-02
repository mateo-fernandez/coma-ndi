<?php
// Metre les require_once des futurs Controllers

class Controller {
  protected static $object = "";

  public static function error(string $title, string $details): void {
    require File::getApp(array("views", "toast.php"));
  }

}

