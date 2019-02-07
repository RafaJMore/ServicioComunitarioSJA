<?php

	session_start();

 	if (isset($_SESSION['usuario']) == 1) {
 		$ses=$_SESSION['usuario'];
 		if($ses['tipo_usuario'] == "Estudiante") {
 
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'plantillas/head.php'; ?>
</head>

<body>
	<header id="header">
	<?php include 'plantillas/header.php'; ?>
	</header>

	<nav>
		<?php include 'plantillas/nav.php'; ?>
	 </nav>

	<article id="article">
	<center>
	<?php 
		
		//Conectar la Base de Datos MySQL
		include '../../server/conexion.php';

		$username=$_POST['username'];

		$sql = "UPDATE usuario SET username='$username' WHERE username='".$_SESSION['usuario']['username']."'";

			if ($conn->query($sql) === TRUE) {
    			echo "<br><br><br><br><br>"."<b>DATOS MODIFICADOS!!!</b>"."<br><br><br><br><br><br>";
			} else {
    			echo "<br><br><br><br><br>"."<b>ERROR:</b>".$conn->error."<br><br><br><br><br>";
			}			

		//Desconectar la Base de Datos MySQL
		include '../../server/desconexion.php';
		?> 	
	</center>
	</article>

<script src="../js/main.js" type="text/javascript"></script>
</body>
</html>
<?php 

 } }	else {
		
		header('Location:../../pagina_principal/Inicio.php');
 	 	die();
 	 }
 ?>