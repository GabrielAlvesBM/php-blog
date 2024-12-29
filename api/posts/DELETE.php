<?php
$env = new Env('./.env');

$allowedIps = explode(',', $env->get('ALLOWED_IPS'));
new CheckIp($allowedIps);

if ($action === '' || $param === '') {
  echo json_encode(['ERRO' => 'Acão/Parâmetro não encontrada.']);
  exit;
}

if ($action === 'delete' && $param !== '') {
  if (!is_numeric($param)) {
    echo json_encode(["ERRO" => 'O id deve ser um número inteiro.']);
    exit;
  }
  array_shift($_POST);

  $db = DB::connect();
  $sql = "DELETE FROM posts WHERE id = :id";

  $stmt = $db->prepare($sql);
  $stmt->bindParam('id', $param, PDO::PARAM_INT);
  $resultado = $stmt->execute();

  if ($resultado) {
    echo json_encode(['dados' => 'Dados excluídos com sucesso!']);
  } else {
    echo json_encode(['ERRO' => 'Houve um erro ao excluir os dados']);
  }
}