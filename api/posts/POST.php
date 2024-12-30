<?php
$env = new Env('./.env');

$allowedIps = explode(',', $env->get('ALLOWED_IPS'));
new CheckIp($allowedIps);

if ($action === '' && $param === '') {
  echo json_encode(['ERRO' => 'Acão não encontrada.']);
  exit;
}

if ($action === 'add' && $param === '') {
  $db = DB::connect();
  $sql = $db->prepare("INSERT INTO posts (title, short_description, content)
    VALUES (:title, :short_description, :content)");

  $sql->bindParam('title', $_POST['title'], PDO::PARAM_STR);
  $sql->bindParam('short_description', $_POST['short_description'], PDO::PARAM_STR);
  $sql->bindParam('content', $_POST['content'], PDO::PARAM_LOB);

  $resultado = $sql->execute();

  if ($resultado) {
    echo json_encode(['dados' => 'Dados inseridos com sucesso!']);
    exit;
  } else {
    echo json_encode(['ERRO' => 'Houve um erro ao inserir os dados.']);
  }
}
