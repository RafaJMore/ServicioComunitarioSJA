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

		$ci_alum = $_POST['ci_alum']; 
		
		$sql = "SELECT * FROM alumno WHERE ci_alum='$ci_alum'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 0) {
	 		echo "<br><br><br><br><br>"."<b>*** EL ESTUDIANTE NO EXISTE ***</b>"."<br><br><br><br><br><br>";
	;
		}

		if (mysqli_num_rows($result) > 0) {
	 		
		$fila = mysqli_fetch_assoc($result);

			if ($fila["estatus"] == 0) {
				echo "<br><br><br><br><br>"."<b>*** ESTUDIANTE INACTIVO ***</b>"."<br><br><br><br><br><br>";
			;

		} else {
		?>
	<form action="actualizar_nota.php" method="post">
	<fieldset>				
	<legend><b>ACTUALICE LOS DATOS:</b></legend>
	<div class="formulario">
		<?php
		
			include '../../server/conexion.php';

			$sql = "SELECT * FROM inscripcion, materia WHERE materia_cod_materia=cod_materia AND alumno_ci_alum='$ci_alum'" ;
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";}

			if (mysqli_num_rows($result) > 0) {
	
    		
    		while($fila = mysqli_fetch_assoc($result)) {
				
			 echo "<br><b>".$fila["nombre_materia"]."</b>";
		
		
			$sql2="SELECT evaluacion, puntaje, peso, id_nota FROM nota WHERE materia_cod_materia='".$fila['cod_materia']."'";	
			$result2 = mysqli_query($conn, $sql2);
				if (mysqli_num_rows($result2) == 0) {
	 			echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";
			}
			if (mysqli_num_rows($result2) > 0) {
		?>
	
		<table class="lista">
		<tr>
		<th>Evaluación</th>
		<th>Puntaje Anterior</th>
		<th>Nuevo Puntaje</th>
		<tr>

		<?php

		$contador=1;
		
    		while($fila1 = mysqli_fetch_assoc($result2)) {
    	
		?>
	
			<tr>
				<td><?php echo $fila1["evaluacion"];?></td>
				<td><?php echo $fila1["puntaje"];?></td>
	 		 	<td><input type="text" name="puntaje_<?php echo $contador;?>" pattern="[0-9]*" maxlength="5" size="5" placeholder="Puntaje" title="Ingrese el Puntaje" autofocus=""></td>
			</tr> 
				<input type="hidden" name="id_<?php echo $contador;?>" value="<?php echo $fila1["id_nota"];?>">
		<?php
			$contador++;
			}

		?>
			<input type="hidden" name="notamodificada" value="<?php echo $contador-1;?>" >
			</table>
			<br>
		<?php
   			}

   			}
   			}
   		}
   		}
		
		include '../../server/desconexion.php';
		?> 
	</fieldset>	
	<input type="submit" value="Aceptar">
	</div>	
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