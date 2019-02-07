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
	 </nav>	<article id="article">
		<div class="consulta">
		<center>
		<?php
			//Conectar la Base de Datos MySQL
			include '../../server/conexion.php';

			$ci_docente=$_POST['ci_docente'];
			
			echo "<br><br><b>CONSULTA DE DATOS</b><br><br>";
			$sql = "SELECT nacionalidad_doc, ci_docente, primer_nom_doc, seg_nom_doc, primer_ape_doc, seg_ape_doc, telefono_doc, email_doc FROM docente WHERE estatus= 1 AND ci_docente = '$ci_docente'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";
			}
			if (mysqli_num_rows($result) > 0) {
		?>
			<table class="lista">
			<tr>
				<th>CI</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Teléfono</th>
				<th>Correo</th>
			</tr>
		<?php
    			// salida de datos por cada registro
    			while($fila = mysqli_fetch_assoc($result)) {
		?>
			<tr>
			<td><?php echo $fila['nacionalidad_doc']."-".$fila["ci_docente"];?></td>
				<td><?php echo $fila["primer_nom_doc"]." ".$fila['seg_nom_doc'];?></td>
				<td><?php echo $fila["primer_ape_doc"]." ".$fila['seg_ape_doc'];?></td>
				<td><?php echo $fila ["telefono_doc"];?></td>
				<td><?php echo $fila ["email_doc"];?></td>
			</tr>

		<?php
				}
		?>
			</table>
			<br>
		<?php
   			}
			
			//Desconectar la Base de Datos MySQL
			include '../../server/desconexion.php';
		?> 
		</center>
		</div>
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