<?php

	session_start();

 	if (isset($_SESSION['usuario']) == 1) {
 		$ses=$_SESSION['usuario'];
 		if($ses['tipo_usuario'] == "Administrador") {
 
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
	 	<h1>Incribir Alumno</h1>
	 	<br>
	 	<h3>Seleccione una opción</h3><br>
	 	<input type="button" name="boton" value="NUEVO ALUMNO" onclick="location.href= 'InscribirAlumno.php'" class="boton">
	 	<br>
	 	<input type="button" name="boton" value="ALUMNO REGULAR" onclick="location.href= 'InscribirRegular.php'" class="boton" >
	 	<br><br>
	 
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