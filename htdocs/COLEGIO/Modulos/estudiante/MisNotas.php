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
	<h1>MIS NOTAS</h1>
	<br>
	<h3>Elije un lapso</h3>
	<input type="button" name="boton" value="PRIMER LAPSO" onclick="location.href= 'Notas-Primer-Lapso.php'" class="boton">
	 	<br>
	 	<input type="button" name="boton" value="SEGUNDO LAPSO" onclick="location.href= 'Notas-Segundo-Lapso.php'" class="boton" >
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
