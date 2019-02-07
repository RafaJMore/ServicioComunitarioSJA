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
		<form action="guardar_materia.php" method="post">
		<fieldset>
			<legend><b>INGRESE LOS DATOS:</b></legend>
			<table>
			<tr>
				<td><label>Código de Materia:</label></td>
				<td><input type="text" name="cod_materia" pattern="[a-zA-Z0-9]*" maxlength="20" size="15" placeholder="Código de la Materia" title="Ingrese Código" autofocus="" required></td>
			</tr>
			<tr>
				<td><label>Nombre Materia:</label></td>
				<td><input type="text" name="nombre_materia" pattern="[a-záéíóú,A-Z]*" maxlength="50" size="15" placeholder="Nombre de la Materia" title="Ingrese Materia" autofocus="" required></td>
			</tr>
			<tr>
				<td><label>Profesor que imparte la materia:</label></td>
				<td><select name="docente_ci_docente">
				<option></option>
					<?php 
						include '../../server/conexion.php';
							$sql="SELECT ci_docente, primer_nom_doc, primer_ape_doc FROM docente WHERE estatus=1";		
							$result = mysqli_query($conn, $sql);
							while($fila=mysqli_fetch_assoc($result)){	
							echo '<option value="'.$fila['ci_docente'].'">'.$fila['primer_nom_doc'].' '.$fila['primer_ape_doc'].'</option>';
							}
						include '../../server/desconexion.php';
						?>
				</select></td>			
				</tr>
			</table>
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