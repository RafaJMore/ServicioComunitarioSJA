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
		include '../../server/conexion.php';

		$ci_alum=$_POST['ci_alum']; 

		$sql = "SELECT ci_alum, estatus FROM alumno WHERE ci_alum='$ci_alum'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 0) {
	 		echo "<br><br><br><br><br>"."<b>*** EL ESTUDIANTE NO EXISTE ***</b>"."<br><br><br><br><br><br>";
		}

		if (mysqli_num_rows($result) > 0) {
	 		
		$fila = mysqli_fetch_assoc($result);

			if ($fila["estatus"] == 1) {
				echo "<br><br><br><br><br>"."<b> *** EL ESTUDIANTE YA SE ENCUENTRA ACTIVO*** </b>"."<br><br><br><br><br><br>";
			} else {
				
				$sql = "UPDATE alumno SET estatus = b'1' WHERE ci_alum='$ci_alum'";

				if ($conn->query($sql) === TRUE) {
    		echo "<br><br><br><br><br>"."<b>ESTUDIANTE RESTAURADO!!!</b>"."<br><br><br><br><br><br>";
				} else {
    		echo "<br><br>"."<b>ERROR:</b>" . $conn->error ."<br><br><br><br><br><br>";
				}			
			}
		}
		//Desconectar la Base de Datos MySQL
		include '../../server/desconexion.php'; ?>
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