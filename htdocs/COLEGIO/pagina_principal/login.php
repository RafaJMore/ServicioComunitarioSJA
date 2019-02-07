<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'plantillas/head.php'; ?>
</head>
<body>
	<?php include 'plantillas/social.php' ?>
	
	<header>
	 <nav>
   		<?php include 'plantillas/nav.php'; ?>
     </nav>
    </header>	
    
	<div id="caja">
		<br><h2>Iniciar Sesión</h2><br>
		<form action="validar-login.php" method="post">
			
			<label>Usuario: </label>
			<input type="text" name="username" placeholder="Usuario" size= 20 required><br>

			<label>Contraseña</label>
			<input type="password" name="password" placeholder="Contraseña" size="20" required ><br>

			<input type="submit" name="boton" value="Entrar">

		<h5><i><a href="validar_usuario.php">¿Olvido su Contraseña?</a></i></h5><br><br>
		</form>
	</div>
</body>
</html>