<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'plantillas/head.php'; ?>
</head>
<body>
	<?php include 'plantillas/social.php' ?>

	<header>
	 <nav>
   		<?php include 'plantillas/nav.php'; ?>
     </nav>
    </header>
     
  <article>
  <center>
	<form action="registro-guardar.php" method="post">
		<br><center><legend><b><h2>FORMULARIO</h2></b></legend><br></center>
		<br>
		<b><h2>&nbspDatos de usuario</h2></b><br>
		<hr><br>
		<label>Nombre de Usuario:</label>
			<input type="text" name="username" pattern="[a-zñáéíóú, A-ZÑ, 0-9]*" maxlength="30" size="15"  placeholder="Nombre de Usuario" title="Ingrese su Nombre de Usuario" required>
		<label>Contraseña:</label>
			<input type="password" name="password" pattern="[a-zñ, A-ZÑ, 0-9]*" maxlength="30" size="15"  placeholder="Password" title="Ingrese su Contraseña" required><br><br>
		<label>Tipo de Usuario:</label>
			<select name="tipo_usuario" required>
				<option value=""></option>
				<option value="1">Estudiante</option>
			</select>	
			<br><br><br>
		<label>Pregunta de Seguridad: </label>	
				<select name="pregunta" required>
				<option value="">---</option>
				<option value="Color Favorito">Color Favorito</option>
				<option value="Apellido de la Madre<">Apellido de la Madre</option>
				<option value="Segundo Apellido del Padre">Segundo Apellido del Padre</option>
				<option value="Raza de Mascota">Raza de Mascota</option>
				</select>
		<label>Respuesta:</label>
		<input type="password" name="respuesta" pattern="[a-záéíóúñ, A-ZÑ, 0-9]*" maxlength="50" size="15" placeholder="Respuesta" title="Ingrese su Respuesta" autofocus="" required><br><br>
		<b><h2>Datos personales</h2></b><br>
		<hr><br>
		<label>Nº de Cédula:&nbsp</label>
			<select name="nacionalidad_alum" required>
			<option> </option>
			<option value="V">V</option>
			<option value="E">E</option>
			</select>
			<input type="text" name="ci_alum" pattern="[0-9]*" maxlength="8" size="15" placeholder="Número de Cédula" title="Ingrese su Cédula" autofocus="" required><br><br>
		<label> 1er Nombre:</label>
			<input type="text" name="primer_nom_alum" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder="Primer Nombre" title="Ingrese sus 1er Nombre" required>
		<label> 2do Nombre:</label>
			<input type="text" name="seg_nom_alum" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder="Segundo Nombre" title="Ingrese sus 2do Nombre" required><br><br>
		<label> 1er Apellido:</label>
			<input type="text" name="primer_ape_alum" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder="Primer Apellido" title="Ingrese su 1er Apellido" required>
		<label> 2do Apellido:</label>
			<input type="text" name="seg_ape_alum" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder="Segundo Apellido" title="Ingrese su 2do Apellido" required><br><br>
		<label>Sexo: </label>
			<input type="radio" name="sexo_alum" value="masculino">Masculino
			<input type="radio" name="sexo_alum" value="femenino">Femenino<br><br>
		<label>Fecha de Nacimiento:</label>
			<input type="date" name="nacimiento_alum" size="15" placeholder="dd/mm/aaaa" title="Ingrese su Fecha de Nacimiento" required>
		<label>Dirección:</label>
			<input type="text" name="direccion_alum" pattern="[a-zñáéíóú, A-ZÑ, 0-9/-.,]*" maxlength="80" size="15" placeholder="Dirección" title="Ingrese su dirección" required><br><br>
		<label>Teléfono:</label>
			<input type="text" name="telefono_alum" pattern="[0-9]*" maxlength="20" size="15" placeholder="Número de Teléfono" title="Ej:0414xxxXXxx" required>
		<label>E-mail:</label>
			<input type="email" name="email_alum" maxlength="60" size="15" placeholder="correo@dominio.com" title="Ingrese su Correo Electrónico" required><br><br>
		<label>Año que cursa:</label>
			<select name="año_idaño">
			<option> </option>
			<option value="1">PRIMERO</option>
			<option value="2">SEGUNDO</option>
			<option value="3">TERCERO</option>
			<option value="4">CUARTO</option>
			<option value="5">QUINTO</option>
			</select><br><br>

		<input type="submit" name="boton" value="Registrar"><br>			
		<br>
	</form>
	</center>
	</article>

	<footer>
    	<?php include 'plantillas/footer.php'; ?>
    </footer>
</body>
</html>