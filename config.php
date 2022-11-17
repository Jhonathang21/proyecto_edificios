<?php

$host		= "localhost";
$usua		= "root";
$pass		= "";
$nbd		= "gualanday_f";
$dsn		= "mysql:host=$host;dbname=$nbd";

try {
	$conexion =new PDO($dsn,$usua,$pass);
} catch(PDOException $error){
	echo $error -> getMessage();
}

?>

