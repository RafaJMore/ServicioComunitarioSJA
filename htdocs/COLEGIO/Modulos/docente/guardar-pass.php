<?php

	session_start();

 	if (isset($_SESSION['usuario']) == 1) {
 		$ses=$_SESSION['usuario'];
 		if($ses['tipo_usuario'] == "Docente") {
 
?>
<!DOCTYPE html>

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
<?php
	
		$username=$_POST['username'];
		$password=$_POST['password'];
		$nuevaclave=$_POST['nuevaclave'];
		$confirmacionclave=$_POST ['confirmacionclave'];

		$coincideclave="si";
		$valido="si";
		$repetida="no";

		$error_mensaje_clave="";

		// Parte 2 - Función de formulario
		
			function formulario ($username,$password,$error_mensaje_clave) {
		?>
			<form action="guardar-pass.php" method="post">
			<fieldset>
				<legend><b>Ingrese una Nueva Clave:</b></legend>
				<div class="formulario">
				<table><br>
				<tr>
					<td>Nueva Clave:</td>
					<td><input type="password" name="nuevaclave" pattern="[a-zñáéíóú A-ZÑ,0-9._°+-()'$%]*" 
					maxlength="16" size="25" placeholder="Ingrese una nueva Contraseña" 
					title="Ingrese una nueva Contraseña" autofocus="" required></td>
					<td>
						<?php echo $error_mensaje_clave; ?>
					</td>
				</tr>
				<tr>
					<td><label>Confirmar Clave:</label></td>
					<td><input type="password" name="confirmacionclave" pattern="[a-zñáéíóú A-ZÑ,0-9._°+-()'$%]*" 
					maxlength="16" size="25"  placeholder="Repita la nueva Contraseña" title="Repita la nueva Contraseña"
					required></td>
					<td>
						<?php echo $error_mensaje_clave; ?>
					</td>
				</tr>
				</table>
				<br><input type="text" name="username" size="25" value="<?php echo $username; ?>" hidden>
					<input type="text" name="password" size="25" value="<?php echo $password; ?>" hidden>
				</div>
			</fieldset>
			<input type="submit" value="Aceptar">
			</form>
		<?php

			}	

		// Parte 3 - Validaciones

		// Validación de contraseña:
		if ($nuevaclave !== $confirmacionclave) {
			$coincideclave="no";
			$error_mensaje_clave="<b>La Contraseña NO Coincide</b>";

		} else {

			// Mínimo 6 Dígitos
			if(strlen($nuevaclave) < 6) {
				$valido="no";
				$error_mensaje_clave="<b>Contraseña Errada</b>";
			}

			// Al menos una Letra en minúscula
			if (!preg_match('`[a-z]`',$nuevaclave)){
				$valido="no";
				$error_mensaje_clave="<b>Contraseña Errada</b>";
   			}

   			// Al menos una Letra en Mayúscula
   			if (!preg_match('`[A-Z]`',$nuevaclave)){
      			$valido="no";
      			$error_mensaje_clave="<b>Contraseña Errada</b>";
      		}

			// Al menos un Número
			if (!preg_match('`[0-9]`',$nuevaclave)){
 				$valido="no";
 				$error_mensaje_clave="<b>Contraseña Errada</b>";
 			}
 
 			// Clave Repetida
 			$nuevaclavecifrada = sha1(md5($nuevaclave));
			if ($password == $nuevaclavecifrada){
 				$repetida="si";
 				$error_mensaje_clave="<b>Contraseña Ya Usada</b>";
 			}		
 		}

 		// Mensajes de error por pantalla

		if ($coincideclave == "no" or $valido == "no" or $repetida == "si") {

 			//Llamado de la Función para nuevo intento
			formulario ($username,$password,$error_mensaje_clave);
		}
   			
   		if ($valido == "no" and $repetida == "no") {

 			echo "<br>"."<b style='color:brown;'>Verifique que la Contraseña tenga:</b>";
  			echo "<br>"."Mínimo 6 Dígitos";
  			echo "<br>"."Al menos una Letra en minúscula";
  			echo "<br>"."Al menos una Letra en Mayúscula";
  			echo "<br>"."Al menos un Número";
		}

 		// Parte 4 - Actualización de Clave

		if ($coincideclave == "si" and $valido == "si" and $repetida == "no") {
				
		// Conectar con la base de datos
			include '../../server/conexion.php';

		// Encriptar la clave
		$nuevaclave = sha1(md5($nuevaclave));

		// Actualizar la clave
			$sql = "UPDATE usuario SET password='$nuevaclave' WHERE cedula='".$_SESSION['usuario']['cedula']."'";

			if ($conn->query($sql) === TRUE) {
    			echo "<br><br><br><br><br>"."<b>CLAVE MODIFICADA!!!</b>"."<br><br><br><br>";
    
			} else {
    			echo "<br><br><br><br><br>"."<b>ERROR:</b>".$conn->error."<br><br><br><br><br>";
			}			

	
		include '../../server/desconexion.php';

		}
		
		?>
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