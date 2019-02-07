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

			$cedula = $_POST['cedula']; 
			$respuesta = $_POST['respuesta'];
			
		$respuesta= sha1(md5($respuesta));

			$sql="SELECT respuesta FROM usuario WHERE cedula='$cedula'";
			$result = mysqli_query($conn, $sql);
			while($fila=mysqli_fetch_assoc($result)){

   			if ($fila['respuesta'] !== $respuesta) {
   				echo "<br><br><br><br><br>"."<b>*** RESPUESTA INVÁLIDA ***</b>"."<br><br><br>";
	 	?>
			<br>
			<button type="button" autofocus
				onclick="window.location.href='validar_usuario.php'">REINTENTAR</button>
			<br><br>
	 		
	 	<?php }  else {
		
	?>
		<h2 style=color:green;>USUARIO AUTENTICADO!</h2>
		<form action="editar_clave.php" method="POST">
			<button type="submit">Cambiar CLave</button>
			<input type="hidden" name="cedula" value="<?php echo $_POST['cedula'];?>">
			</tr>
		</form>
		
		<button type="button" onclick="window.location.href='login.php'">Cancelar</button>
		
	<?php } }

	include '../server/desconexion.php';
	?>

</center>
</article>
</body>
</html>