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
	<form method="post">
		<center>
		<br><br>
		<?php 
			$ci_alum=$_POST['ci_alum'];
		?>
		<input type="text" name="ci_alum" size="5" value="<?php echo $ci_alum; ?>" hidden>
		<table>
        	<tr>
            	<td colspan="2"><p style="color:red;"><b>BLOQUEO DE ESTUDIANTE</b></p></td>
        	</tr>
        	<tr>
                <td colspan="2"><center><p><b>¿DESEA BLOQUEAR EL ESTUDIANTE CON CI</b></p>
				<?php 
					echo "<font color='blue'>"."$ci_alum"."?";
				?>
                </center></td>
        	</tr>
        	<tr>
            	<td><center><button type="submit" formaction="alum_bloqueado.php">Aceptar</button></td>
            	<td><center><button type="submit" formaction="BloquearAlumno.php">Cancelar</button></td>
        	</tr>
    	</table>	
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