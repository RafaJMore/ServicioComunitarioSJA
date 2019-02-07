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
    
<article>
	<center>
		<form action="pregunta-seguridad.php" method="post">
		<fieldset>
			<legend><b>Recuperar Contraseña:</b></legend>
			<div class="formulario">
			<table>
			<tr>
				<td><label>Cedula:</label></td>
				<td><input type="text" name="cedula" maxlength="20" size="20" placeholder="Cedula" title="Ingrese su Cedula" autofocus="" style="text-transform:lowercase;" required></td>
			</tr>
			</table>
			</div>
		</fieldset>
		<input type="submit" value="Aceptar">
		<a href='login.php'>Cancelar</a>
		</form>
		</center>
</article>

</body>
</html>