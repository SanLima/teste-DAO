<?php

require_once("config.php");

$dbName="testes";

//$sql = new Sql($dbName);
//$sql->setDbName($dbName);
//$que = $sql->select("SELECT * FROM mteste");
//echo json_encode($que);

$usr=new Usuario($dbName);

//$usr->loadById(16);
//$usr = Usuario::getList();
//$usr = Usuario::search("M");
//echo json_encode($usr);

//Carrega usuario usando login e senha
$usr->login("Sandro Lima", "123456");
echo $usr;

?>
