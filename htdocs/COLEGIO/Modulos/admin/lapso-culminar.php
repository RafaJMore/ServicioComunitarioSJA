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

		$cod_lapso=$_POST['cod_lapso']; 

		$sql = "SELECT cod_lapso, estatus FROM lapso WHERE cod_lapso='$cod_lapso'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 0){
			
			echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";
		}


		if (mysqli_num_rows($result) > 0) {
	 		
		$fila = mysqli_fetch_assoc($result);

			if ($fila["estatus"] == 1) {
				
				$sql = "UPDATE lapso SET estatus = b'0' WHERE cod_lapso='$cod_lapso'";

				if ($conn->query($sql) === TRUE) {
    		echo "<br><br><br><br><br>"."<b>LAPSO CULMINADO!!!</b>"."<br><br><br><br><br><br>";
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