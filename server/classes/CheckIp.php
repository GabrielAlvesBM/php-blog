<?php 

class CheckIp {
  private $allowedIp;
  public $clientIp;

  public function __construct($allowedIp){
    $this->allowedIp = $allowedIp;
    $this->clientIp = $this->getClientIp();
    $this->checkIp();
  }

  public function checkIp() {
    if (!in_array($this->clientIp, $this->allowedIp)) {
      echo json_encode(['ERROR' => 'Acesso negado. IP não autorizado']);
      http_response_code(403);
      exit;
    }
  }

  public function getClientIp() {
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if ($ip === '::1') {
        $ip = '127.0.0.1';
    }

    return $ip;
  }
}