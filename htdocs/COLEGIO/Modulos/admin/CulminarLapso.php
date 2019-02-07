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
		<form action="lapso-culminar.php" method="post">
		<fieldset>
			<legend><b>CULMINAR LAPSO:</h2></legend>
			<table>
				<tr>
				<td><label>Código de Lapso:</label></td>
				<td><input type="text" name="cod_lapso" maxlength="10" size="15" placeholder="Ingrese el Código" title="Ingrese el Código" autofocus="" required></td>
				</tr>
		</table>
		</fieldset>
			<input type="submit" value="Aceptar">
		</form>	
		
		<?php
			//Conectar la Base de Datos MySQL
			include '../../server/conexion.php';

			echo "<br><br><b>LISTADO DE LAPSOS ACTIVOS</b>";
			$sql = "SELECT cod_lapso, lapso FROM lapso WHERE estatus = 1";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br><br><br>"."<b>*** NO HAY DATOS ***</b>"."<br><br><br><br><br>";
			}
			if (mysqli_num_rows($result) > 0) {
		?>
			<table class="lista">
			<tr>
				<th>Código</th>
				<th>Lapso</th>
			</tr>
		<?php
    			// salida de datos por cada registro
    			while($fila = mysqli_fetch_assoc($result)) {
		?>
			<tr>
				<td><?php echo $fila["cod_lapso"];?></td>
				<td><?php echo $fila["lapso"];?></td>
				
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