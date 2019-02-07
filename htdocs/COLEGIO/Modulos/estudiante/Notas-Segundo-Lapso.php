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


			$sql = "SELECT cod_lapso FROM lapso where lapso='Segundo Lapso'";
			$result0 = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result0) == 0) {
	 			echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";
			} 

			if (mysqli_num_rows($result0) > 0) {
				$fila = mysqli_fetch_assoc($result0);
				$cod_lapso=$fila['cod_lapso'];
			


			echo "<br><br><b>MIS NOTAS</b><br><br>";
			$sql = "SELECT alumno_ci_alum, inscripcion.materia_cod_materia , materia.cod_materia,  materia.nombre_materia,  alumno.estatus FROM inscripcion, materia, alumno, lapso WHERE cod_lapso='".$cod_lapso."' and  lapso.estatus=1 AND alumno.estatus=1 AND inscripcion.alumno_ci_alum=ci_alum AND inscripcion.materia_cod_materia=materia.cod_materia AND ci_alum='".$_SESSION['usuario']['cedula']."'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS O UD. SE ENCUENTRA BLOQUEADO DEL SISTEMA***</b>"."<br><br><br><br><br>";
			} 

			if (mysqli_num_rows($result) > 0) {
		?>
	
		<?php
    			
    		while($fila = mysqli_fetch_assoc($result)) {
				
			 echo "<b>".$fila["nombre_materia"]."</b>";
		
			$sql2="SELECT evaluacion, puntaje, peso, (SELECT lapso from lapso WHERE cod_lapso=lapso_cod_lapso) as lapso FROM nota WHERE lapso_cod_lapso='".$cod_lapso."' AND materia_cod_materia='".$fila['cod_materia']."' AND alumno_ci_alum='".$_SESSION['usuario']['cedula']."'";	
			$result2 = mysqli_query($conn, $sql2);
				if (mysqli_num_rows($result2) == 0) {
	 			echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";
			}
			if (mysqli_num_rows($result2) > 0) {
		?>
	
		<table class="lista">
		<tr>
		<th>Evaluación</th>
		<th>Puntaje</th>
		<th>Peso</th>
		</tr>
		<tr>

		<?php
		       $promedio=0;
		       $contador_n=0;
		       $total_n=0;

    			while($fila1 = mysqli_fetch_assoc($result2)) {
    				$total_n=$total_n+$fila1["puntaje"];
    				$contador_n++;

		?>
	
			<tr>
				<td><?php echo $fila1["evaluacion"];?></td>
				<td><?php echo $fila1["puntaje"];?></td>
				<td><?php echo $fila1["peso"];?></td>
			</tr> 
				
		<?php
				}
				$promedio=$total_n/$contador_n;

		?>
				<tr>
		<th>Promedio</th>
		<th><?php echo $promedio; ?></th>
		</tr>

			</table>
			<br>
		<?php
   				}

   			}
   		}
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
