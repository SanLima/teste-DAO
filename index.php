<?php

require_once("config.php");

$dbName="testes";

//$sql = new Sql($dbName);
//$sql->setDbName($dbName);
//$que = $sql->select("SELECT * FROM mteste");
//echo json_encode($que);

$usr=new Usuario($dbName);
$usr->loadById(3);
echo $usr;
?>
