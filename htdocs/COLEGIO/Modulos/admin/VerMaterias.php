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

			echo "<br><br><b>MATERIAS REGISTRADAS</b><br><br>";
			$sql = "SELECT cod_materia, nombre_materia, primer_nom_doc, primer_ape_doc FROM materia, docente WHERE materia.docente_ci_docente=docente.ci_docente";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br><br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";
			}
			if (mysqli_num_rows($result) > 0) {
		?>
			<table class="lista">
			<tr>
				<th>Código de Materia</th>
				<th>Nombre de Materia</th>
				<th>Docente</th>
			</tr>
		<?php
    			// salida de datos por cada registro
    			while($fila = mysqli_fetch_assoc($result)) {
		?>
			<tr>
				<td><?php echo $fila["cod_materia"];?></td>
				<td><?php echo $fila["nombre_materia"];?></td>
				<td><?php echo $fila["primer_nom_doc"]." ".$fila["primer_ape_doc"];?></td>
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