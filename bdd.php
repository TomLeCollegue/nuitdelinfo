<?php
//fonction connexion a la bbd
if(!function_exists("get_pdo")) {
  function get_pdo () {
    return new PDO('mysql:host=localhost;dbname=calendrier', 'root', '', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
}