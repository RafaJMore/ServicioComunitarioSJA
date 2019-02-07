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
			<div class="consulta">
				<form action="guardar_asignacion.php" method="post">

					<fieldset>
						<legend><b>Inscribir Materias:</b></legend>
						<label>Alumno</label>
						<input type="text" name="alumno_ci_alum" pattern="[0-9]*" maxlength="20" size="15" placeholder="Número de Cédula" title="Ingrese Cédula del Alumno" autofocus="" required><br><br>

						<label>Materia</label>
						<table>
							<?php  include '../../server/conexion.php';

							$sql="SELECT * FROM materia";		
							$result1 = mysqli_query($conn, $sql);
							
							$i=0;

							while($fila1=mysqli_fetch_assoc($result1)){ $i++; ?>
							<tr>
								<td>
									<input type="checkbox" name="materia_cod_materia<?php echo $i; ?>" value= "<?php echo $fila1['cod_materia'];?>"><?php echo $fila1['nombre_materia'];?>

								</td>
								<td>
									<label>Docente</label>

									<select name="materia_docente_ci_docente<?php echo $i; ?>">
										<option> </option>
										<?php  include '../../server/conexion.php';
										$sql="SELECT ci_docente, primer_nom_doc, primer_ape_doc FROM docente";		
										$result = mysqli_query($conn, $sql);
										while($fila=mysqli_fetch_assoc($result)){	
											echo '<option value="'.$fila['ci_docente'].'">'.$fila['primer_nom_doc'].' '.$fila['primer_ape_doc'].'</option>';
										}
										
										?><br>	
									</select>

								</td>
							</tr>

							<?php 
						}
						include '../../server/desconexion.php';
						?>
					</table>


				</fieldset>
				<input type="submit" value="Aceptar">

			</form>
		</div>
	</center>
</article>


<script src="../js/main.js" type="text/javascript"></script>
</body>
</html>