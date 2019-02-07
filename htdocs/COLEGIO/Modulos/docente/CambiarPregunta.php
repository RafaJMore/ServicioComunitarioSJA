<?php

	session_start();

 	if (isset($_SESSION['usuario']) == 1) {
 		$ses=$_SESSION['usuario'];
 		if($ses['tipo_usuario'] == "Docente") {
 
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
		<form action="guardar-pregunta.php" method="post">
			<fieldset>
				<label>Pregunta de Seguridad: </label>	
				<select name="pregunta" required>
				<option value="">---</option>
				<option value="Color Favorito">Color Favorito</option>
				<option value="Apellido de la Madre<">Apellido de la Madre</option>
				<option value="Segundo Apellido del Padre">Segundo Apellido del Padre</option>
				<option value="Raza de Mascota">Raza de Mascota</option>
				</select>

		<label>Respuesta:</label>
		<input type="password" name="nuevarespuesta" pattern="[a-záéíóúñ, A-ZÑ, 0-9]*" maxlength="50" size="15" placeholder="Respuesta" title="Ingrese su Respuesta" autofocus="" required><br><br>
			</fieldset>
			<input type="submit" value="Aceptar">
			<input type="text" name="password" size="25" value='<?php echo $fila["password"]; ?>' hidden>

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