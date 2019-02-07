<?php

	session_start();

 	if (isset($_SESSION['usuario']) == 1) {
 		$ses=$_SESSION['usuario'];
 		if($ses['tipo_usuario'] == "Docente") {
 
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
		<div class="formulario">
		<form action="guardar-datos-docente.php" method="post">
		<fieldset>
			<legend><b>INGRESE LOS DATOS:</b></legend>

			<?php
				include '../../server/conexion.php';

				$sql="SELECT nacionalidad_doc, ci_docente FROM docente WHERE ci_docente='".$_SESSION['usuario']['cedula']."'";
				$result = mysqli_query($conn, $sql);
 
				if (mysqli_num_rows($result) > 0) {
				$fila = mysqli_fetch_assoc($result);

				?>

				<input type="text" name="ci_docente" value="<?php echo $fila['nacionalidad_doc']." - ".$fila["ci_docente"];?>"readonly><br><br>
			
				<label> 1er Nombre: </label>
				<input type="text" name="primer_nom_doc" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder="Primer Nombre" title="Ingrese su 1er Nombre" required>

				<label> 2do Nombre: </label>
				<input type="text" name="seg_nom_doc" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder="Segundo Nombre" title="Ingrese su 2d Nombre"><br><br>
			
				<label> 1er Apellido: </label>
				<input type="text" name="primer_ape_doc" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder=" Primer Apellido" title="Ingrese su 1er Apellido" required>

				<label> 2do Apellido: </label>
				<input type="text" name="seg_ape_doc" pattern="[a-zñáéíóú, A-ZÑ]*" maxlength="30" size="15"  placeholder=" Segundo Apellido" title="Ingrese su 2do Apellido"><br><br>

				<label>Sexo: </label>
				<input type="radio" name="sexo_doc" value="Masculino">Masculino
				<input type="radio" name="sexo_doc" value="Femenino">Femenino
				<br><br>

				<label>Fecha de Nacimiento: </label>
				<input type="date" name="nacimiento_doc" placeholder="dd/mm/aaaa" title="Ingrese su Fecha de Nacimiento" required>
			
				<label>Dirección: </label>
				<input type="text" name="direccion_doc" pattern="[a-zñáéíóúA-ZÑ0-9/-.,]*" maxlength="80" size="80" placeholder="Dirección" title="Ingrese su dirección" required><br><br>

				<label>Teléfono: </label>
				<input type="text" name="telefono_doc" pattern="[0-9]*" maxlength="20" size="15" placeholder="Número de Teléfono" title="Ej:0414xxxXXxx" required>
			
				<label>Email: </label>
				<input type="email" name="email_doc" maxlength="60" size="35" placeholder="correo@dominio.com" title="Ingrese su Correo Electrónico" required>
		</div>
			<input type="submit" value="Registrar">
		</fieldset>
		</form>			
		</div>
		<?php
			}include'../../server/desconexion.php';
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