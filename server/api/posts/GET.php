<?php

if ($action === '' && $param === '') {
  echo json_encode(['ERRO' => 'Acão não encontrada.']);
  exit;
}

if ($action === 'list' && $param === '') {
  $db = DB::connect();
  $sql = $db->prepare("SELECT * FROM posts");
  $sql->execute();

  $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

  if ($resultado) {
    echo json_encode(["dados" => $resultado]);
  } else {
    echo json_encode(["dados" => 'Não existem dados para retornar.']);
  }
} 