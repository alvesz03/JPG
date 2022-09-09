<?php
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){
	define("BASE_URL", "http://localhost/jpg/");
	$config['dbname'] = 'jpg';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{
	define("BASE_URL", "https://facedev.com.br/jpg/");
	$config['dbname'] = 'siste092_jpg';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'siste092_jpg';
	$config['dbpass'] = '123@Mudar';
}

try{
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $erro){
	echo "ERRO: ".$erro->getMessage();
	exit;
}

?>