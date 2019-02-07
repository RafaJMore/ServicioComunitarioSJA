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
			<?php 
		
		//Conectar la Base de Datos MySQL
		include '../../server/conexion.php';

		$ci_alum=$_POST['ci_alum'];
		$direccion_alum=$_POST['direccion_alum'];
		$telefono_alum=$_POST['telefono_alum'];
		$email_alum=$_POST['email_alum'];

				
		
		if (!empty($direccion_alum)){

		$sql1 = "UPDATE alumno SET direccion_alum='$direccion_alum' WHERE ci_alum=$ci_alum";
		$conn->query($sql1);

		if ($conn->query($sql1) === TRUE) {
    			echo "<br><br><br><br><br>"."<b>DATOS MODIFICADOS!!!</b>"."<br><br><br><br><br><br>";}

	 else {
    			echo "<br><br><br><br><br>"."<b>ERROR:</b>".$conn->error."<br><br><br><br><br>";
			}	}
		

		if (!empty($telefono_alum)){

		$sql2 = "UPDATE alumno SET telefono_alum='$telefono_alum' WHERE ci_alum=$ci_alum";
			$conn->query($sql2);
			if ($conn->query($sql2) === TRUE) {
    			echo "<br><br><br><br><br>"."<b>DATOS MODIFICADOS!!!</b>"."<br><br><br><br><br><br>";
			}  
			 else {
    			echo "<br><br><br><br><br>"."<b>ERROR:</b>".$conn->error."<br><br><br><br><br>";
			}	}

		if (!empty($email_alum)){

		$sql3 = "UPDATE alumno SET email_alum='$email_alum' WHERE ci_alum=$ci_alum";
		$conn->query($sql3);

			if ($conn->query($sql3) === TRUE) {
    			echo "<br><br><br><br><br>"."<b>DATOS MODIFICADOS!!!</b>"."<br><br><br><br><br><br>";
			} 

	 else {
    			echo "<br><br><br><br><br>"."<b>ERROR:</b>".$conn->error."<br><br><br><br><br>";
			}	}
		

		//Desconectar la Base de Datos MySQL
		include '../../server/desconexion.php';
		?> 
		
		
	</center>
	</article>

<script src="../js/main.js" type="text/javascript"></script>
</body>
<?php 

 } }	else {
		
		header('Location:../../pagina_principal/Inicio.php');
 	 	die();
 	 }
 ?>