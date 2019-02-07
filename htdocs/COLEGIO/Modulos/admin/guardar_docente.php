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

		$username=$_POST['username'];
		$password =$_POST['password'];
		$tipo_usuario=$_POST['tipo_usuario'];
		$pregunta =$_POST['pregunta'];
		$respuesta =$_POST['respuesta'];
		$nacionalidad_doc=$_POST['nacionalidad_doc'];
		$ci_docente=$_POST['ci_docente'];
		$primer_nom_doc=$_POST['primer_nom_doc'];
		$seg_nom_doc=$_POST['seg_nom_doc'];
		$primer_ape_doc=$_POST['primer_ape_doc'];
		$seg_ape_doc=$_POST['seg_ape_doc'];
		$sexo_doc=$_POST['sexo_doc'];
		$nacimiento_doc=$_POST ['nacimiento_doc'];
		$direccion_doc=$_POST['direccion_doc'];
		$telefono_doc=$_POST['telefono_doc'];
		$email_doc=$_POST['email_doc'];

		
		$password= sha1(md5($password));
		$respuesta= sha1(md5($respuesta));
	

		$sql = "INSERT INTO usuario VALUES('$ci_docente','$username','$password','$tipo_usuario','$pregunta','$respuesta')";
		$res1=$conn->query($sql);

		if (empty($seg_nom_doc and $seg_ape_doc)){

		$sql1 = "INSERT INTO docente VALUES ('$nacionalidad_doc', '$ci_docente','$primer_nom_doc',null , '$primer_ape_doc',null, '$sexo_doc', '$nacimiento_doc','$direccion_doc','$telefono_doc','$email_doc','1')";
		$res2=$conn->query($sql1);}

		else {
			$sql1 = "INSERT INTO docente VALUES ('$nacionalidad_doc', '$ci_docente','$primer_nom_doc','$seg_nom_doc', '$primer_ape_doc','$seg_ape_doc', '$sexo_doc', '$nacimiento_doc','$direccion_doc','$telefono_doc','$email_doc','1')";
			$res2=$conn->query($sql1);
			
		}

		if($res1==true and $res2==true) {
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