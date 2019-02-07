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

	<form action="actualizar_alum.php" method= "post">

	Cédula: <input type="text" name="datos"  value= "<?php echo $fila['nacionalidad_alum']." - " .$fila['ci_alum'] ; ?>" readonly>
	Nombres: <input type="text" name="datos"  value= "<?php echo $fila['primer_nom_alum']. " ".$fila['seg_nom_alum'] ; ?>" readonly>
	Apellidos: <input type="text" name="datos"  value= "<?php echo $fila['primer_ape_alum']. " " .$fila['seg_ape_alum'] ; ?>" readonly><br>
	Sexo: <input type="text" name="datos"  value= "<?php echo $fila['sexo_alum']; ?>" readonly>
	Fecha de Nacimiento: <input type="text" name="datos"  value= "<?php echo $fila['nacimiento_alum']; ?>" readonly><br>
	Dirección: <input type="text" name="datos"  value= "<?php echo $fila['direccion_alum']; ?>" readonly><br>
	Telefóno: <input type="text" name="datos"  value= "<?php echo $fila['telefono_alum']; ?>" readonly>
	Correo: <input type="text" name="datos"  value= "<?php echo $fila['email_alum']; ?>" readonly>
	<br><br>
	<label>Año que cursa:</label>
				<select name="año_idaño">
				<option> </option>
				<option value="1">PRIMERO</option>
				<option value="2">SEGUNDO</option>
				<option value="3">TERCERO</option>
				<option value="4">CUARTO</option>
				<option value="5">QUINTO</option>
				</select><br><br>

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