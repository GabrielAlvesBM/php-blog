<?php
class DB {
  public static function connect() {
    $host = 'localhost';
    $user = 'root';
    $password = '4444';
    $base = 'api';

    return new PDO("mysql:host=$host;dbname=$base;charset=UTF8;", $user, $password);
  }
}