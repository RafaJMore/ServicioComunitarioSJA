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
			<?php
			$cedula = $_POST['cedula'];
		
			include '../server/conexion.php';

			//Verificar los datos
			$sql = "SELECT cedula  FROM usuario WHERE cedula='$cedula'";
			$result = mysqli_query($conn, $sql);

			//Validación del Usuario
			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br><br><br><br>"."<b>*** USUARIO NO REGISTRADO ***</b>"."<br><br><br>";
	 	?>
			<br>
			<button type="button" autofocus 
				onclick="window.location.href='validar_usuario.php'">REINTENTAR</button>
			<br><br> 
			<?php } else {
				?>

		<form action="confirmar-usuario.php" method="post">
		<fieldset>
			<legend><b>Recuperar Clave:</b></legend>
			<div class="formulario">
			<table>
			<tr>
				<td><label>Pregunta de seguridad:</label></td>
				<td>
				<select name="pregunta" required>
				<?php 
						include '../server/conexion.php';

						$cedula=$_POST['cedula'];

							$sql="SELECT  tipo_usuario FROM usuario WHERE cedula='$cedula'";		
							$result = mysqli_query($conn, $sql);
							while($fila=mysqli_fetch_assoc($result)){	
							if()

							}
						include '../server/desconexion.php';
						?>
				</select>
				</td>
			</tr>
			<tr>
				<td><label>Respuesta:</label></td>
				<td><input type="password" name="respuesta" pattern="[a-záéíóúñ, A-ZÑ, 0-9]*" maxlength="50" size="15" placeholder="Respuesta" title="Ingrese su Respuesta" autofocus="" required>
				</td>
				<input type="hidden" name="cedula" value="<?php echo $_POST['cedula'];?>">
			</tr>
		<?php } ?> 
	 
	</table>
	</div>
		</fieldset>
		<input type="submit" value="Aceptar">
		<button type="button" onclick="window.location.href='login.php'">Cancelar</button>
		</form>
		</center>
</article>

</body>
</html>