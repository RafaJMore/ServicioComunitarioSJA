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
	<form action="guardar-clave.php" method="post">
			<fieldset>
				<legend><b>Ingrese una Nueva Clave:</b></legend>
				<div class="formulario">
				<table><br>
				<tr>
					<td>Nueva Clave:</td>
					<td><input type="password" name="nuevaclave" pattern="[a-zñáéíóú A-ZÑ,0-9._°+-()'$%]*" maxlength="16" 
					size="25" placeholder="Ingrese una nueva Contraseña" title="Ingrese una nueva Contraseña" 
					autofocus="" required></td>
				</tr>
				<tr>
					<td><label>Confirmar Nueva Clave:</label></td>
					<td><input type="password" name="confirmacionclave" pattern="[a-zñáéíóú A-ZÑ,0-9._°+-()'$%]*" 
					maxlength="16" size="25"  placeholder="Repita la nueva Contraseña" title="Repita la nueva Contraseña"
					required></td>
				</tr>
				</table><br>
				<input type="text" name="cedula" size="25" value="<?php echo $cedula; ?>" hidden>
				<input type="text" name="password" size="25" value='<?php echo $fila["password"]; ?>' hidden>
				</div>
			</fieldset>
			<input type="submit" value="Aceptar">
			<input type="hidden" name="cedula" value="<?php echo $_POST['cedula'];?>">
			<button type="button" onclick="window.location.href='login.php'">Cancelar</button>
			</form>
</center>
</article>

</body>
</html>