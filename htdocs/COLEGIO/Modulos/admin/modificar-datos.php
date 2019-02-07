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
	
	<?php 
 	
 	include '../../server/conexion.php';

 	$ci_alum=$_POST['ci_alum'];

 	$sql = "SELECT * FROM alumno WHERE ci_alum='$ci_alum'";
 	$result = mysqli_query($conn, $sql);
 
 		if (mysqli_num_rows($result) == 0) {
	 	echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";
			}
 

 	if (mysqli_num_rows($result) > 0) {

 		$fila = mysqli_fetch_assoc($result);

 	
	?>

	<form action="guardar-datos.php" method= "post">

	Cédula: <input type="text" name="datos"  value= "<?php echo $fila['nacionalidad_alum']." - " .$fila['ci_alum'] ; ?>" readonly>
	Nombres: <input type="text" name="datos"  value= "<?php echo $fila['primer_nom_alum']. " ".$fila['seg_nom_alum'] ; ?>" readonly>
	Apellidos: <input type="text" name="datos"  value= "<?php echo $fila['primer_ape_alum']. " " .$fila['seg_ape_alum'] ; ?>" readonly><br><br>
	Sexo: <input type="text" name="datos"  value= "<?php echo $fila['sexo_alum']; ?>" readonly>
	Fecha de Nacimiento: <input type="text" name="datos"  value= "<?php echo $fila['nacimiento_alum']; ?>" readonly><br><br>
	Dirección: <input type="text" name="direccion_alum" pattern="[a-zñáéíóúA-ZÑ 0-9 /-.,]*" maxlength="80" size="80" placeholder="Dirección" title="Ingrese su dirección"><br>
	Telefóno: <input type="text" name="telefono_alum" pattern="[0-9]*" maxlength="20" size="15" placeholder="Número de Teléfono" title="Ej:0414xxxXXxx"><br>
	Correo: <input type="email" name="email_alum" maxlength="60" size="35" placeholder="correo@dominio.com" title="Ingrese su Correo Electrónico"><br><br>
	
	<input type="submit" value="Aceptar">
	<input type="hidden" name="ci_alum" value="<?php echo $_POST['ci_alum'];?>">
		
	</form>
	<?php

	}

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