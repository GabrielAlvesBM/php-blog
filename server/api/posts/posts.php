<?php

if ($api === 'posts') {
  if ($method === 'GET') {
    include_once 'GET.php';
  }

  if ($method === 'POST') {
    include_once 'POST.php';
  }
}