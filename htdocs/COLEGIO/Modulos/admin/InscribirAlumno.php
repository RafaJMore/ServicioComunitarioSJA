<?php

	session_start();

 	if (isset($_SESSION['usuario']) == 1) {
 		$ses=$_SESSION['usuario'];
 		if($ses['tipo_usuario'] == "Administrador") {
 
?>
<!DOCTYPE html>
<html lang="es">
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
	<center>
		<div class="formulario">
		<form action="guardar_alumno.php" method="post">
		<fieldset>
			<legend><b>INGRESE LOS DATOS:</b></legend>
			<b><h3>Datos de Usuario</h3></b>
			<hr>
				<label>Usuario:</label>
				<td><input type="text" name="username" pattern="[a-zñáéíóú, A-ZÑ, 0-9]*" maxlength="30" size="15"  placeholder="Nombre de Usuario" title="Ingrese su Nombre de Usuario" required>
			
				<label>Contraseña:</label>
				<td><input type="password" name="password" pattern="[a-z, A-ZÑ 0-9]*" maxlength="30" size="15"  placeholder="Password" title="Ingrese su Contraseña" required><br><br>

				<label>Tipo de Usuario: </label>
				<select name="tipo_usuario" required>
					<option value=""></option>
					<option value="Estudiante">Estudiante</option>
					</select>
					<br><br>
		
			<b><h3>Datos personales</h3></b>
			<hr>
				<label>Nº de Cédula: </label>
				<label></label>
					<select name="nacionalidad_alum" required>
					<option> </option>
					<option value="V">V</option>
					<option value="E">E</option>
					</select>
				<input type="text" name="ci_alum" pattern="[0-9]*" maxlength="20" size="15" placeholder="Número de Cédula" title="Ingrese su Cédula" autofocus="" required><br><br>
			
				<label> 1er Nombre: </label>
				<input type="text" name="primer_nom_alum" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder="Primer Nombre" title="Ingrese su 1er Nombre" required>

				<label> 2do Nombre: </label>
				<input type="text" name="seg_nom_alum" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder="Segundo Nombre" title="Ingrese su 2do Nombre" ><br><br>
			
				<label> 1er Apellido: </label>
				<input type="text" name="primer_ape_alum" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder=" Primer Apellido" title="Ingrese su 1er Apellido" required>

				<label> 2do Apellido: </label>
				<input type="text" name="seg_ape_alum" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder=" Segundo Apellido" title="Ingrese su 2do Apellido"><br><br>

				<label>Sexo: </label>
				<input type="radio" name="sexo_alum" value="Masculino" required>Masculino
				<input type="radio" name="sexo_alum" value="Femenino" required>Femenino
				<br><br>

				<label>Fecha de Nacimiento: </label>
				<input type="date" name="nacimiento_alum" placeholder="dd/mm/aaaa" title="Ingrese su Fecha de Nacimiento" required>
			
				<label>Dirección: </label>
				<input type="text" name="direccion_alum" pattern="[a-zñáéíóúA-ZÑ0-9/-.,]*" maxlength="80" size="80" placeholder="Dirección" title="Ingrese su dirección" required><br><br>

				<label>Teléfono: </label>
				<input type="text" name="telefono_alum" pattern="[0-9]*" maxlength="20" size="15" placeholder="Número de Teléfono" title="Ej:0414xxxXXxx" required>
			
				<label>Email: </label>
				<input type="email" name="email_alum" maxlength="60" size="35" placeholder="correo@dominio.com" title="Ingrese su Correo Electrónico" required><br><br>
				
				<label>Año que cursa:</label>
				<select name="año_idaño" required>
				<option> </option>
				<option value="1">PRIMERO</option>
				<option value="2">SEGUNDO</option>
				<option value="3">TERCERO</option>
				<option value="4">CUARTO</option>
				<option value="5">QUINTO</option>
				</select><br>
		</div>
			<input type="submit" value="Registrar">
		</fieldset>
		</form>			
		</div>
		</center>
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