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

	include '../server/conexion.php';

	session_start();

   	 $username= $_POST['username'];
	$password=$_POST['password'];

		
		//Encriptar Contraseña
		$password = sha1(md5($password));

		$sql = "SELECT  cedula, username, password, tipo_usuario FROM usuario WHERE username='$username'";
		$result = mysqli_query($conn, $sql);

			//Validación del Usuario
			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br><br><br><br>"."<b>*** NOMBRE DE USUARIO Y/O CLAVE INVÁLIDA  ***</b>"."<br><br><br>";
	 	?>
			<br>
			<button type="button" autofocus 
				onclick="window.location.href='login.php'">REGRESAR</button>
			<br><br>

	 	<?php
			} else {
   			$fila = mysqli_fetch_assoc($result);

   				//Validación de Clave
   				if ($fila["password"] !== $password) {
   				echo "<br><br><br><br><br>"."<b>***  NOMBRE DE USUARIO Y/O CLAVE INVÁLIDA ***</b>"."<br><br><br>";
	 	?>
			
			<br>
			<button type="button" autofocus
				onclick="window.location.href='login.php'">REGRESAR</button>
			<br><br>
	 		
	 	<?php
   				}else {
 				
 				if ($fila["tipo_usuario"] == "Administrador") {

 					$_SESSION['usuario'] = $fila;

 					header('Location:../Modulos/admin');
 				};

 				if ($fila["tipo_usuario"] == "Docente") {

 					$_SESSION['usuario'] = $fila;

 					header('Location:../Modulos/docente');
 				};

 				if ($fila["tipo_usuario"] == "Estudiante") {

 					$_SESSION['usuario'] = $fila;

 					header('Location:../Modulos/estudiante');
 				};
   				}
   			}	
			//Desconectar la Base de Datos MySQL
			include '../server/desconexion.php';
		?> 
 </center>
 </article> 
 </body>
 </html>
	