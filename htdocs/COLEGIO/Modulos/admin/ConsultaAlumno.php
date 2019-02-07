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
		<form action="mostrar_alumno.php" method="post">
		<fieldset>
			<legend><b>CONSULTAR ESTUDIANTE:</h2></legend>
			<table>
				<tr>
				<td><label>Cédula del Estudiante:</label></td>
				<td><input type="text" name="ci_alum" pattern="[0-9]*" maxlength="10" size="15" placeholder="Ingrese la Cédula" title="Ingrese la Cédula" autofocus="" required></td>
				</tr>
		</table>
		</fieldset>
			<input type="submit" value="Buscar">
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