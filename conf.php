<?php
$serverinimi="127.0.0.1";
$kasutajanimi="root";
$parool="";
$andmebaas="d75373sd274981";
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaas);
$yhendus->set_charset("utf8");

if ($yhendus) {
  } else {
    echo "Connection Failed";
  }

error_reporting(E_ALL & E_STRICT);
ini_set('display_errors', '1');
ini_set('log_errors', '0');
ini_set('error_log', './');
?>