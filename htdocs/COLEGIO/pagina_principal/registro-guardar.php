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

		$username=$_POST['username'];
		$password = sha1(md5($password));
		$tipo_usuario=$_POST['tipo_usuario'];
		$pregunta = sha1(md5($pregunta));
		$respuesta = sha1(md5($respuesta));
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

		$sql = "INSERT INTO usuario VALUES('$username','$password','$tipo_usuario', '$pregunta', '$respuesta','$ci_alum')";
		$res1=$conn->query($sql);
		$sql1 = "INSERT INTO alumno VALUES ('$nacionalidad_alum', '$ci_alum','$primer_nom_alum','$seg_nom_alum', '$primer_ape_alum','$seg_ape_alum', '$sexo_alum', '$nacimiento_alum','$direccion_alum','$telefono_alum','$email_alum','$año_idaño','1')";
		$res2=$conn->query($sql1);

		if($res1==true and $res2==true) {
			echo "<br><br><br><br><br>"."<b>DATOS GUARDADOS!!!</b>"."<br><br><br><br><br><br>";
		}
		else{
		echo "<br><br><br>"."<b>ERROR:&nbsp</b>".$sql."<br><br><br>"."<b>".mysqli_error($conn)."</b>"."<br><br><br><br><br>";
		}

		include '../server/desconexion.php';
	?>
	</center>
	</article>	

	<footer>
    	<?php include 'plantillas/footer.php'; ?>
    </footer>
</body>
</html>