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
		<form action="guardar-usuario.php" method="post">
			<fieldset>
				<legend><b>Ingrese un Nuevo Usuario:</b></legend>
					Nuevo Usuario:
					<input type="text" name="username" pattern="[a-zñáéíóú A-ZÑ,0-9._°+-()'$%]*" maxlength="30" 
					size="30" placeholder="Ingrese una nuevo usuario" title="Ingrese una nuevo usuario" 
					autofocus="" required>	
			</fieldset>
			<input type="submit" value="Aceptar">
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