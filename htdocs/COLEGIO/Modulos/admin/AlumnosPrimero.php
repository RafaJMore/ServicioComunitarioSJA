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
	 	<div class="consulta">
		<center>
		<?php
			//Conectar la Base de Datos MySQL
			include '../../server/conexion.php';

			echo "<br><br><b>Lista de Estudiantes de 1er año</b><br><br>";
			$sql = "SELECT nacionalidad_alum,ci_alum, primer_nom_alum, seg_nom_alum, primer_ape_alum, seg_ape_alum, telefono_alum, email_alum FROM alumno WHERE año_idaño=1";
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
    			// salida de datos por cada regist ro
    			while($fila = mysqli_fetch_assoc($result)) {
		?>
			<tr>
				<td><?php echo $fila["nacionalidad_alum"]."-".$fila["ci_alum"];?></td>
				<td><?php echo $fila["primer_nom_alum"]." ".$fila["seg_nom_alum"];?></td>
				<td><?php echo $fila["primer_ape_alum"]." ".$fila["seg_ape_alum"];?></td>
				<td><?php echo $fila["telefono_alum"];?></td>
				<td><?php echo $fila["email_alum"];?></td>
			</tr>

		<?php
				}
		?>
			</table>
			<br><button type="button" onclick="window.open('../../PDF/ListaPrimero.php')" formtarget="_blank">IMPRIMIR</button>
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