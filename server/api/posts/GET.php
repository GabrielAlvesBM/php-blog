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
    exit;
  } else {
    echo json_encode(["dados" => 'Não existem dados para retornar.']);
    exit;
  }
} 

if ($action === 'list' && $param !== '') {
  if (!is_numeric($param)) {
    echo json_encode(["ERRO" => 'O parâmetro deve ser um número inteiro.']);
    exit;
  }

  $db = DB::connect();
  $sql = $db->prepare("SELECT * FROM posts WHERE id = :id");

  $sql->bindParam('id', $param, PDO::PARAM_INT);
  $sql->execute();

  $resultado = $sql->fetchObject();

  if ($resultado) {
    echo json_encode(["dados" => $resultado]);
    exit;
  } else {
    echo json_encode(["dados" => 'Não existe dado para retornar.']);
    exit;
  }
}