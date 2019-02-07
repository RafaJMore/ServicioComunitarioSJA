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
	$lapso=$_POST['lapso'];
	$fecha_inicio=$_POST ['fecha_inicio'];
	$fecha_fin=$_POST ['fecha_fin'];

	$sql="INSERT INTO lapso VALUES ('$cod_lapso', '$lapso', '$fecha_inicio', '$fecha_fin', 1)";
	$result=$conn->query($sql);

		if($result == true) {
			echo "<br><br><br><br><br>"."<b>DATOS GUARDADOS!!!</b>"."<br><br><br><br><br><br>";
		}
		else{
		echo "<br><br><br>"."<b>ERROR:&nbsp</b>".$sql."<br><br><br>"."<b>".mysqli_error($conn)."</b>"."<br><br><br><br><br>";
		}
		
		include'../../server/desconexion.php';

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