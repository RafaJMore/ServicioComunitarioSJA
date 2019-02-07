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
		<form action="confirmar_restauracion.php" method="post">
		<fieldset>
			<legend><b>RESTAURAR ESTUDIANTE:</h2></legend>
			<table>
				<tr>
				<td><label>Cédula del Estudiante:</label></td>
				<td><input type="text" name="ci_alum" pattern="[0-9]*" maxlength="10" size="15" placeholder="Ingrese la Cédula" title="Ingrese la Cédula" autofocus="" required></td>
				</tr>
		</table>
		</fieldset>
			<input type="submit" value="Aceptar"><br>
		</form>			
		<?php
			//Conectar la Base de Datos MySQL
			include '../../server/conexion.php';

			echo "<br><br><b>LISTADO DE ALUMNOS BLOQUEADOS</b>";
			$sql = "SELECT nacionalidad_alum, ci_alum, primer_nom_alum, seg_nom_alum, primer_ape_alum, seg_ape_alum, telefono_alum, email_alum, año_idaño FROM alumno WHERE estatus = 0";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br><br><br>"."<b>*** NO HAY DATOS ***</b>"."<br><br><br><br><br>";
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
				<th>Año que cursa</th>

			</tr>
		<?php
    			// salida de datos por cada registro
    			while($fila = mysqli_fetch_assoc($result)) {
		?>
			<tr>
				<td><?php echo $fila["nacionalidad_alum"]."-".$fila["ci_alum"];?></td>
				<td><?php echo $fila["primer_nom_alum"]." ".$fila['seg_nom_alum'];?></td>
				<td><?php echo $fila["primer_ape_alum"]." ".$fila['seg_ape_alum'];?></td>
				<td><?php echo $fila["telefono_alum"];?></td>
				<td><?php echo $fila["email_alum"];?></td>
				<td><?php echo $fila["año_idaño"];?></td>

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