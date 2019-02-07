<?php

	session_start();

 	if (isset($_SESSION['usuario']) == 1) {
 		$ses=$_SESSION['usuario'];
 		if($ses['tipo_usuario'] == "Docente") {
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


		$primer_nom_doc=$_POST['primer_nom_doc'];
		$seg_nom_doc=$_POST['seg_nom_doc'];
		$primer_ape_doc=$_POST['primer_ape_doc'];
		$seg_ape_doc=$_POST['seg_ape_doc'];
		$sexo_doc=$_POST['sexo_doc'];
		$nacimiento_doc=$_POST ['nacimiento_doc'];
		$direccion_doc=$_POST['direccion_doc'];
		$telefono_doc=$_POST['telefono_doc'];
		$email_doc=$_POST['email_doc'];

		if (!empty($seg_nom_doc and $seg_ape_doc)){

		$sql = "UPDATE docente SET primer_nom_doc='$primer_nom_doc', seg_nom_doc='$seg_nom_doc', primer_ape_doc='$primer_ape_doc', seg_ape_doc='$seg_ape_doc', sexo_doc='$sexo_doc', nacimiento_doc='$nacimiento_doc', direccion_doc='$direccion_doc', telefono_doc='$telefono_doc', email_doc='$email_doc' WHERE ci_docente='".$_SESSION['usuario']['cedula']."'";
		$result=$conn->query($sql);
	}

	else {
		$sql = "UPDATE docente SET primer_nom_doc='$primer_nom_doc', seg_nom_doc=null , primer_ape_doc='$primer_ape_doc', seg_ape_doc=null , sexo_doc='$sexo_doc', nacimiento_doc='$nacimiento_doc', direccion_doc='$direccion_doc', telefono_doc='$telefono_doc', email_doc='$email_doc' WHERE ci_docente='".$_SESSION['usuario']['cedula']."'";
		$result=$conn->query($sql);
			
		}

		if($result==TRUE) {
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