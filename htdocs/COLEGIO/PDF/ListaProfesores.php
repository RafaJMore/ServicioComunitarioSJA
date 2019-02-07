<?php
	ob_start();
?>

<page>
		<img src="../img/LOGO.jpg" width="80">
		<br>
		<div align="center">
		<?php

			include '../server/conexion.php';

			echo "<br><br><b>Lista de Docentes</b><br><br>";
			$sql = "SELECT nacionalidad_doc, ci_docente, primer_nom_doc, seg_nom_doc, primer_ape_doc, seg_ape_doc, telefono_doc, email_doc FROM docente WHERE  estatus = '1'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) == 0) {
				echo "<br><br><br><br>"."<b> NO HAY DATOS REGISTRADOS </b>"."<br><br><br><br><br>";
			}
			if (mysqli_num_rows($result) > 0) {
		?>
			<table border="1" align="center">
			<tr>
				<th>C.I</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Teléfono</th>
				<th>Correo Electrónico</th>
			</tr>

			<?php

				while ($fila = mysqli_fetch_assoc($result)){
			?>

			<tr>
				<td><?php echo $fila['nacionalidad_doc']."-".$fila["ci_docente"];?></td>
				<td><?php echo $fila["primer_nom_doc"]." ".$fila['seg_nom_doc'];?></td>
				<td><?php echo $fila["primer_ape_doc"]." ".$fila['seg_ape_doc'];?></td>
				<td><?php echo $fila ["telefono_doc"];?></td>
				<td><?php echo $fila ["email_doc"];?></td>
			</tr>

			<?php 
					}
			?>
			</table>
			<br>

			<?php
				}

				include '../server/desconexion.php';
			?>
		</div>

</page>

<?php

	$content = ob_get_clean();
	require_once('html2pdf/html2pdf.class.php');
	$pdf = new HTML2PDF('P','LETTER','es','UTF-8');
	$pdf->writeHTML($content);
	$pdf->output('ListaProfesores.pdf');

?>