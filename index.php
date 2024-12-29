<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

date_default_timezone_set("America/Sao_Paulo");

if (isset($_GET['path'])) {
  $path = explode("/", $_GET['path']);
} else {
  echo "Caminho não existe";
  exit;
}

if (isset($path[0])) {
  $api = $path[0];
} else {
  echo "Caminho não existe";
  exit;
}

if (isset($path[1])) {
  $action = $path[1];
} else {
  $action = '';
}

if (isset($path[2])) {
  $param = $path[2];
} else {
  $param = '';
}

if (isset($path[3])) {
  $param2 = $path[3];
} else {
  $param2 = '';
}

$method = $_SERVER['REQUEST_METHOD'];

include_once './classes/db.php';
include_once './classes/Env.php';
include_once './classes/CheckIp.php';

include_once './api/posts/posts.php';
