<?php


spl_autoload_register(function($nameClass){
	//var_dump($nameClass);
	$dirClass = "class";
	$filename = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";
	
	if(file_exists($filename)){
		require_once($filename);
	}
});

define(BHOST, "127.0.0.1");
define(BUSER, "root");
define(BPASS, "123456");



?>
