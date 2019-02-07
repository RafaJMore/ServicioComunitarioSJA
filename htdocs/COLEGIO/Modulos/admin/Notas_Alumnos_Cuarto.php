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
	 		<form action="guardar_notas.php" method="post">
	 		<fieldset>
	 		<legend><b>Registrando Notas:</b></legend>
	 		 	<label>Evaluación</label>
	 		 	<input type="text" name="evaluacion" pattern="[a-z, A-Z, 0-9]*" maxlength="50" size="15" placeholder="Evaluación" title="Describa la Evaluación realizada" autofocus="" required>
	 		 	<label>Fecha de Evaluación</label>
	 		 	<input type="date" name="fecha_eval" placeholder="dd/mm/aaaa" title="Fecha de Evaluación" required><br><br>
	 		 	
	 		 	<label>Peso</label>
	 		 	<input type="text" name="peso" pattern="[0-9 %]*" maxlength="5" size="5" placeholder="Peso" title="Ingrese el Peso de la evaluación" autofocus="" required><br><br>
	 		
	 			</select>
	 			<label>Lapso</label>
	 			<select name="lapso_cod_lapso">
	 				<option> </option>
	 					<?php include '../../server/conexion.php';
							$sql="SELECT cod_lapso, lapso FROM lapso";		
							$result = mysqli_query($conn, $sql);
							while($fila=mysqli_fetch_assoc($result)){	
							echo '<option value="'.$fila['cod_lapso'].'">'.$fila['lapso'].'</option>';
							}
						include '../../server/desconexion.php';
					?>
	 			</select>
	 			<label>Materia</label>
	 			<select name="materia_cod_materia">
	 				<option> </option>
	 					<?php  include '../../server/conexion.php';
							$sql="SELECT cod_materia, nombre_materia FROM materia";		
							$result = mysqli_query($conn, $sql);
							while($fila=mysqli_fetch_assoc($result)){	
							echo '<option value="'.$fila['cod_materia'].'">'.$fila['nombre_materia'].'</option>';
							}
						include '../../server/desconexion.php';
						?>
	 			</select><br><br>

	 		<?php
			//Conectar la Base de Datos MySQL
			include '../../server/conexion.php';

			$sql = "SELECT ci_alum, primer_nom_alum,  primer_ape_alum  FROM alumno WHERE año_idaño=4";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";
			}
			if (mysqli_num_rows($result) > 0) {
		?>
			<table class="lista">
			<tr>
				<th>Alumno</th>
				<th>Puntaje</th>
			</tr>
		<?php
    			// salida de datos por cada regist ro
		$contador=1;

    			while($fila = mysqli_fetch_assoc($result)) {
		?>
			<tr>
		
				<td><?php echo $fila["primer_nom_alum"]." ".$fila["primer_ape_alum"];?></td>
				<td>
				<input type="hidden" name="ci_alum_<?php echo $contador;?>" value="<?php echo $fila['ci_alum'];?>">
				<input type="text" name="puntaje_<?php echo $contador;?>" pattern="[0-9]*" maxlength="5" size="5" placeholder="Puntaje" title="Ingrese el Puntaje" autofocus="" required></td>
			</tr>

		
		<?php
		$contador++;
				}

		?>
		<input type="hidden" name="nalumno" value="<?php echo $contador-1;?>" >
			</table>
			<br>
		<?php
   			}
			
			//Desconectar la Base de Datos MySQL
			include '../../server/desconexion.php';
		?> 
	 	</fieldset>
	 		<input type="submit" value="Calificar">
	 	</form>
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