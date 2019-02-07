<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$database="colegio_sja";
	
	// Crear la conexión
  	$conn = new mysqli ($servername, $username, $password, $database); 
	$conn->query("SET NAMES 'utf8'");

	// Verificar la conexión 
	if($conn->connect_error)
  	{ die("error de conexión:".$conn->connect_error);
  	}

?>