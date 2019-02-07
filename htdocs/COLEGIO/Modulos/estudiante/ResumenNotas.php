<?php

	session_start();

 	if (isset($_SESSION['usuario']) == 1) {
 		$ses=$_SESSION['usuario'];
 		if($ses['tipo_usuario'] == "Estudiante") {
 

	

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
	<div class="consulta">
		
		<?php

		include '../../server/conexion.php';

		echo "<br><br><b>RESUMEN DE NOTAS</b><br><br>";


		$sql= "SELECT sum(puntaje)/count(alumno_ci_alum) as promedio, materia_cod_materia, lapso_cod_lapso, cod_materia, nombre_materia, lapso, ci_alum FROM nota, materia, lapso, alumno  WHERE alumno_ci_alum='".$_SESSION['usuario']['cedula']."' AND lapso.estatus=1 AND alumno.estatus=1 AND nota.materia_cod_materia=materia.cod_materia AND nota.lapso_cod_lapso=lapso.cod_lapso group by materia_cod_materia, lapso_cod_lapso order by lapso_cod_lapso";
		$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS O UD. SE ENCUENTRA BLOQUEADO DEL SISTEMA ***</b>"."<br><br><br><br><br>";
			}
			if (mysqli_num_rows($result) > 0) {
		?>

		<table class="lista">
			<tr>
				<th>Materia</th>
				<th>Puntaje</th>
				<th>Lapso</th>
			</tr>
		<?php
    			// salida de datos por cada registro
    			while($fila = mysqli_fetch_assoc($result)) {
		?>
			<tr>
				<td><?php echo $fila["nombre_materia"];?></td>
				<td><?php echo $fila["promedio"];?></td>
				<td><?php echo $fila["lapso"];?></td>
			</tr>

		<?php
				}
		?>
			</table>
		
		<?php
   			}
			

		include '../../server/desconexion.php';
		?>


	</div>
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
