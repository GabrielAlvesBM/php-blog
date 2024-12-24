<?php
class DB {
  public static function connect() {
    $env = new Env('./.env');
    $host = $env->get('DB_HOST');
    $user = $env->get('DB_USER');
    $password = $env->get('DB_PASSWORD');
    $base = $env->get('DB_NAME');

    try {
      return new PDO("mysql:host=$host;dbname=$base;charset=UTF8;", $user, $password);
    } catch (PDOException $e) {
      die("Erro na conexão com o banco de dados: " . $e->getMessage());
    }
  }
}