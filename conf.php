<?php
$serverinimi="127.0.0.1";
$kasutajanimi="root";
$parool="";
$andmebaas="d75373sd274981";
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaas);
$yhendus->set_charset("utf8");

if ($yhendus) {
    echo "Connected!";
  } else {
    echo "Connection Failed";
  }
?>