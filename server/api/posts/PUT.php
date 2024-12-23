<?php

if ($action === '' && $param === '') {
  echo json_encode(['ERRO' => 'Acão não encontrada.']);
  exit;
}

if ($action === 'update' && $param !== '') {
  if (!is_numeric($param)) {
    echo json_encode(["ERRO" => 'O id deve ser um número inteiro.']);
    exit;
  }
  array_shift($_POST);

  $db = DB::connect();
  $sql = "UPDATE posts SET ";

  $contador = 1;
  foreach(array_keys($_POST) as $indice) {
    if (count($_POST) > $contador) {
      $sql .= "{$indice} = '{$_POST[$indice]}', ";
    } else {
      $sql .= "{$indice} = '{$_POST[$indice]}'";
    }

    $contador++;
  }
  $sql .= "WHERE id = :id";

  $stmt = $db->prepare($sql);
  $stmt->bindParam('id', $param, PDO::PARAM_INT);
  $resultado = $stmt->execute();

  if ($resultado) {
    echo json_encode(['dados' => 'Dados atualizados com sucesso!']);
  } else {
    echo json_encode(['ERRO' => 'Houve um erro ao atualizar os dados']);
  }
}