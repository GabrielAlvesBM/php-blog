<?php

if ($api === 'posts') {
  if ($method === 'GET') {
    include_once 'GET.php';
  }

  if ($method === 'POST') {
    include_once 'POST.php';
  }

  if ($method === 'POST' && $_POST['_method'] === 'PUT') {
    include_once 'PUT.php';
  }

  if ($method === 'POST' && $_POST['_method'] === 'DELETE') {
    include_once 'DELETE.php';
  }
}