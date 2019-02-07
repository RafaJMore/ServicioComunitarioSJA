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

	
		$evaluacion=$_POST['evaluacion'];
		$fecha_eval=$_POST['fecha_eval'];
		$peso=$_POST['peso'];
		$lapso_cod_lapso=$_POST['lapso_cod_lapso'];
		$materia_cod_materia=$_POST['materia_cod_materia'];
		$nalumno=$_POST['nalumno'];

		for ($contador = 1; $contador<= $nalumno; $contador++ ) {
			
			$ci='ci_alum_'.$contador;
			$alumno_ci_alum=$_POST[$ci];
			$puntos='puntaje_'.$contador;
			$puntaje=$_POST[$puntos];


		$sql = "INSERT INTO nota VALUES ('', '$evaluacion', '$fecha_eval','$puntaje','$peso', '$alumno_ci_alum','$lapso_cod_lapso', '$materia_cod_materia' )";
		$result=$conn->query($sql);
		}
		
		if($result==true) {
			echo "<br><br><br><br><br>"."<b>DATOS GUARDADOS!!!</b>"."<br><br><br><br><br><br>";
		}
		else{
		echo "<br><br><br>"."<b>ERROR:&nbsp</b>".$sql."<br><br><br>"."<b>".mysqli_error($conn)."</b>"."<br><br><br><br><br>";
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