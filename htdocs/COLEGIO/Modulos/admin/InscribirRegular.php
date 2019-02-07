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
		<fieldset>
		<form action="AlumnoRegular.php" method="post">
				<label>Ingrese cédula del alumno:</label>
				<input type="text" name="ci_alum" maxlength="20" size="20" placeholder="Cedula" title="Ingrese Cedula" autofocus="" required>
	</fieldset>
		<input type="submit" value="Aceptar">
	</form> 
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