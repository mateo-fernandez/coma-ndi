<?php

class Conf {
  private static $debug = true;

  private static $databases = array(
      'hostname' => '',
      'database' => '',
      'login' => '',
      'password' => ''
  );

  public static function getLogin(): string {
    return self::$databases['login'];
  }

  public static function getPassword(): string {
    return self::$databases['password'];
  }

  public static function getHostname(): string {
    return self::$databases['hostname'];
  }

  public static function getDatabase(): string {
    return self::$databases['database'];
  }

  public static function getDebug(): bool {
    return self::$debug;
  }

  public static function getUrlRoot(): string {
    return "/coma/";
  }

}
