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
		<form action="guardar_admin.php" method="post">
		<fieldset>
			<legend><b>INGRESE LOS DATOS:</b></legend>
			<table>
			<tr>
				<td><label>Cedula:</label></td>
				<td><input type="text" name="cedula" pattern="[0-9]*" maxlength="20" size="15" placeholder="Ingrese su Cedula" title="Ingrese su Cedula" autofocus="" required></td>
			</tr>
			<tr>
				<td><label>Nombre de Administrador:</label></td>
				<td><input type="text" name="username" pattern="[a-zA-Z0-9]*" maxlength="50" size="30" placeholder="Nombre de Administrador" title="Ingrese Nombre" autofocus="" required></td>
			</tr>
			<tr>
				<td><label>Contraseña</label></td>
				<td><input type="password" name="password" pattern="[a-zñ, A-ZÑ, 0-9]*" maxlength="30" size="35"  placeholder="Password" title="Ingrese su Contraseña" required></td>
			</tr>
				<tr>
				<td><label>Tipo: </label></td>
				<td><select name="tipo_usuario" required>
					<option value=""></option>
					<option value="Administrador">Administrador</option>
					</select></td>
			</tr>
			<tr>
			<td><label>Pregunta de Seguridad: </label></td>
				<td><select name="pregunta" required>
				<option value="">---</option>
				<option value="Color Favorito">Color Favorito</option>
				<option value="Apellido de la Madre<">Apellido de la Madre</option>
				<option value="Segundo Apellido del Padre">Segundo Apellido del Padre</option>
				<option value="Raza de Mascota">Raza de Mascota</option>
				</select></td>
			<tr>
			<td><label>Respuesta:</label></td>
			<td><input type="password" name="respuesta" pattern="[a-záéíóúñ, A-ZÑ, 0-9]*" maxlength="50" size="15" placeholder="Respuesta" title="Ingrese su Respuesta" autofocus="" required><br><br></td>
			<tr>
			</table>
			</div>
			</fieldset>
			<input type="submit" value="Guardar">
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