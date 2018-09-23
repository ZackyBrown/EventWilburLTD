<?php
function connectbdd(){


  $servername = "";
  $namedb = "Wilbur";
  $username = "";
  $password = "";


  $bdd = new PDO('mysql:host='.$servername.';dbname='.$namedb.';charset=utf8', $username, $password);
  return $bdd;

}
?>
