
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
		
		//Conectar la Base de Datos MySQL
		include '../../server/conexion.php';
        $notamodificada=$_POST['notamodificada'];
//		$puntos='puntaje_'.$contador;
//		$puntaje=$_POST['puntaje'];
//		$notamodificada=$_POST['notamodificada'];
		
		for ($contador = 1; $contador<= $notamodificada; $contador++ ) {

        $puntaje='puntaje_'.$contador;
        $id='id_'.$contador;

		$sql = "UPDATE nota SET puntaje='".$_POST[$puntaje]."' where id_nota=".$_POST[$id];
        $conn->query($sql);
	}

			if ($conn->query($sql) === TRUE) {
    			echo "<br><br><br><br><br>"."<b>DATOS MODIFICADOS!!!</b>"."<br><br><br><br><br><br>";
			} else {
    			echo "<br><br><br><br><br>"."<b>ERROR:</b>".$conn->error."<br><br><br><br><br>";
			}
					

		//Desconectar la Base de Datos MySQL
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