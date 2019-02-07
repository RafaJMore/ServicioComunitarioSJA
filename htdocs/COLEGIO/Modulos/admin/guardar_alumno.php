<?php

	session_start();

 	if (isset($_SESSION['usuario']) == 1) {
 		$ses=$_SESSION['usuario'];
 		if($ses['tipo_usuario'] == "Administrador") {
 
?>

<!DOCTYPE html>
<html lang="es">
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

		$username=$_POST['username'];
		$password =$_POST ['password'];
		$tipo_usuario=$_POST['tipo_usuario'];
		$nacionalidad_alum=$_POST['nacionalidad_alum'];
		$ci_alum=$_POST['ci_alum'];
		$primer_nom_alum=$_POST['primer_nom_alum'];
		$seg_nom_alum=$_POST['seg_nom_alum'];
		$primer_ape_alum=$_POST['primer_ape_alum'];
		$seg_ape_alum=$_POST['seg_ape_alum'];
		$sexo_alum=$_POST['sexo_alum'];
		$nacimiento_alum=$_POST['nacimiento_alum'];
		$direccion_alum=$_POST['direccion_alum'];
		$telefono_alum=$_POST['telefono_alum'];
		$email_alum=$_POST['email_alum'];
		$año_idaño=$_POST['año_idaño'];

		
		$password= sha1(md5($password));

		$sql = "INSERT INTO usuario VALUES ('$ci_alum', '$username', '$password', '$tipo_usuario', null, null)";
		$res1=$conn->query($sql);

		if (empty($seg_nom_alum and $seg_ape_alum)){

		$sql2 = "INSERT INTO alumno VALUES ('$nacionalidad_alum', '$ci_alum','$primer_nom_alum', null , '$primer_ape_alum', null , '$sexo_alum', '$nacimiento_alum','$direccion_alum','$telefono_alum','$email_alum','$año_idaño','1')";
		$res2=$conn->query($sql2);} 

		else {
			$sql2 = "INSERT INTO alumno VALUES ('$nacionalidad_alum', '$ci_alum','$primer_nom_alum', '$seg_nom_alum' , '$primer_ape_alum', '$seg_ape_alum' , '$sexo_alum', '$nacimiento_alum','$direccion_alum','$telefono_alum','$email_alum','$año_idaño','1')";
			$res2=$conn->query($sql2);
		}

		if($res1==true and $res2==true) {
			echo "<br><br><br><br><br>"."<b>DATOS GUARDADOS!!!</b>"."<br><br><br><br><br><br>";
		} 
		else{
		echo "<br><br><br>"."<b>ERROR:&nbsp</b>".$sql."<br><br><br>"."<b>".mysqli_error($conn)."</b>"."<br><br><br><br><br>";
		}

		include '../../server/desconexion.php';
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