<?php
/**
 *
 */
class Singleton
{
  private static $instance;
  private static $connect;

  private static $host = "localhost";
  private static $username = "root";
  private static $password = "";
  private static $dbname = "ecomerce";

  private function __construct()
  {
  }

  public static function getInstance()
  {
    if (self::$instance == null) {
      self::$instance = new self;
    }

    return self::$instance;
  }

  public static function getConnect()
  {
    if (self::$connect == null) {
      self::$connect = new mysqli(self::$host, self::$username, self::$password, self::$dbname);

      if (mysqli_connect_error()) {
          die('Connect Error (' . mysqli_connect_errno() . ') '
                  . mysqli_connect_error());
      }
    }
    return self::$connect;
  }

}

?>
