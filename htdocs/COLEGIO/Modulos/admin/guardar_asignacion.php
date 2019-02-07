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
			
			$alumno_ci_alum=$_POST['alumno_ci_alum'];
			
	
			$sql = "SELECT * FROM alumno WHERE ci_alum=$alumno_ci_alum";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) == 0) {
	 			echo "<br><br>"."<b>*** NO HAY DATOS REGISTRADOS ***</b>"."<br><br><br><br><br>";
			}

			if (mysqli_num_rows($result) > 0) {

	 	$contador=1;
        $bandera=false;
	 	while ($contador <= 15) {

	 		$materia='materia_cod_materia'.$contador;
	 		$docente='materia_docente_ci_docente'.$contador;
	 		$alumno_ci_alum=$_POST['alumno_ci_alum'];
	 		//echo $campo;
	 		if(!empty($_POST[$materia])){

	 		$sql2="INSERT INTO inscripcion VALUES ('$_POST[$materia]', '$_POST[$docente]', '$alumno_ci_alum')";
	 		$result2=$conn->query($sql2);
	 		
	 		if($result2==true) {
			    $bandera=true;
			}
		}
		$contador++;

	 	}
	 		if($bandera==true) {
			echo "<br><br><br><br><br>"."<b>DATOS GUARDADOS!!!</b>"."<br><br><br><br><br><br>";
			}
			else{
			echo "<br><br><br>"."<b>ERROR:&nbsp</b>".$sql2."<br><br><br>"."<b>".mysqli_error($conn)."</b>"."<br><br><br><br><br>";
			}
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