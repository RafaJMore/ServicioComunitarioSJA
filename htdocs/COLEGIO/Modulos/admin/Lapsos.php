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
		<form action="guardar_lapso.php" method="post">
		<fieldset>
			<legend><b>INGRESE LOS DATOS:</b></legend>
			<table>
			<tr>
				<td><label>Código de Lapso:</label></td>
				<td><input type="text" name="cod_lapso" pattern="[a-zA-Z 0-9 -.]*" maxlength="20" size="15" placeholder="Ej. 2017-I" title="Ingrese Código" autofocus="" required></td>
			</tr>
			<tr>
				<td><label>Lapso:</label></td>
				<td><select name="lapso" required>
				<option> </option>
				<option value="Primer Lapso"> Primer Lapso</option>
				<option value="Segundo Lapso">Segundo Lapso</option>
			
			</tr>
			<tr>
				<td><label>Fecha de Inicio: </label></td>
				<td><input type="date" name="fecha_inicio" placeholder="dd/mm/aaaa" title="Ingrese la Fecha de Inicio del Lapso" required></td>
			</tr>
			<tr>
				<td><label>Fecha de Fin: </label></td>
				<td><input type="date" name="fecha_fin" placeholder="dd/mm/aaaa" title="Ingrese la Fecha Final del Lapso" required></td>
			</tr>
			</table>
			</div>
			</fieldset>
			<input type="submit" value="Guardar">
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