<?php

	session_start();

 	if (isset($_SESSION['usuario']) == 1) {
 		$ses=$_SESSION['usuario'];
 		if($ses['tipo_usuario'] == "Estudiante") {
 
?>
<!DOCTYPE html>

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
		<form action="guardar-pass.php" method="post">
			<fieldset>
				<legend><b>Ingrese una Nueva Contraseña:</b></legend>
					Nuevo Contraseña:
					<input type="password" name="nuevaclave" pattern="[a-zñáéíóú A-ZÑ,0-9._°+-()'$%]*" maxlength="30" 
					size="30" placeholder="Ingrese una Nueva Contraseña" title="Ingrese una Nueva Contraseña" 
					autofocus="" required><br>
					Repita su Contraseña:
					<input type="password" name="confirmacionclave" pattern="[a-zñáéíóú A-ZÑ,0-9._°+-()'$%]*" maxlength="30" 
					size="30" placeholder="Ingrese una Nueva Contraseña" title="Ingrese una Nueva Contraseña" 
					autofocus="" required>	
			</fieldset>
			<input type="submit" value="Aceptar">
			<input type="text" name="password" size="25" value='<?php echo $fila["password"]; ?>' hidden>
			<input type="text" name="username" size="25" value='<?php echo $fila["username"]; ?>' hidden>


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