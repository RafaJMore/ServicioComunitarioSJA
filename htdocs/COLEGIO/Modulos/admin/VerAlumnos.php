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
	 	<h1>Lista de alumnos por año</h1>
	 	<br>
	 	<input type="button" name="boton" value="PRIMER AÑO" onclick=" location.href='AlumnosPrimero.php'" class="boton">
	 	<br>
	 	<input type="button" name="boton" value="SEGUNDO AÑO" onclick=" location.href='AlumnosSegundo.php'" class="boton" >
	 	<br>
	 	<input type="button" name="boton" value="TERCER AÑO" onclick=" location.href='AlumnosTercero.php'" class="boton">
	 	<br>
	 	<input type="button" name="boton" value="CUARTO AÑO" onclick=" location.href='AlumnosCuarto.php'" class="boton">
	 	<br>
	 	<input type="button" name="boton" value="QUINTO AÑO" onclick=" location.href='AlumnosQuinto.php'" class="boton">
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