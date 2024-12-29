<?php

class Env {
  private $file;

  public function __construct($file) {
    $this->file = $file;
    $this->load();
  }

  private function load() {
    if (!file_exists($this->file)) {
      throw new Exception('Arquivo .env não encontrado.');
    }

    $lines = file($this->file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach($lines as $line) {
      if (strpos($line, '#') === 0 || strpos($line, ';') === 0) {
        continue;
      }

      list($key, $value) = explode('=', $line, 2);

      $key = trim($key);
      $value = trim($value, "\"'");

      putenv("{$key}={$value}");
    }
  }

  public function get($key) {
    return getenv($key);
  }
}