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
			$sql = "SELECT cedula, tipo_usuario  FROM usuario WHERE cedula='$cedula'";
			$result = mysqli_query($conn, $sql);

			//Validación del Usuarioseguridad
			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br><br><br><br>"."<b>*** USUARIO NO REGISTRADO ***</b>"."<br><br><br>";
	 	?>
			<br>
			<button type="button" autofocus 
				onclick="window.location.href='validar_usuario.php'">REINTENTAR</button>
			<br><br> 
			<?php } else {  
				$fila=mysqli_fetch_assoc($result);
				if($fila['tipo_usuario']=='Estudiante') {
					echo "<b style= color:red;> DIRIGASE A LA INSTITUCIÓN PARA RECUPERAR SU CLAVE! </b>";
				} else {
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

							$sql="SELECT pregunta, tipo_usuario FROM usuario WHERE cedula='$cedula'";		
							$result = mysqli_query($conn, $sql);
							while($fila=mysqli_fetch_assoc($result)){	
							echo '<option value="'.$fila['pregunta'].'">'.$fila['pregunta'].'</option>';
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
		
	 
	</table>
	</div>
		</fieldset>
		<input type="submit" value="Aceptar">
		<button type="button" onclick="window.location.href='login.php'">Cancelar</button>
		</form>
		</center>
		<?php }
		
		}
		
		 ?> 
</article>

</body>
</html>