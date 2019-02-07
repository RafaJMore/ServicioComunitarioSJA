<?php
	ob_start();
?>

<page>
		<img src="../img/LOGO.jpg" width="80">
		<br>
		<div align="center">
		<?php

			include '../server/conexion.php';

			echo "<br><br><b>Lista de Estudiantes de 3er año</b><br><br>";
			$sql = "SELECT nacionalidad_alum, ci_alum, primer_nom_alum, seg_nom_alum, primer_ape_alum, seg_ape_alum, telefono_alum, email_alum FROM alumno WHERE  estatus = '1' AND año_idaño='3'";
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
				<td><?php echo $fila["nacionalidad_alum"]."-".$fila["ci_alum"];?></td>
				<td><?php echo $fila["primer_nom_alum"]." ".$fila["seg_nom_alum"];?></td>
				<td><?php echo $fila["primer_ape_alum"]." ".$fila["seg_ape_alum"];?></td>
				<td><?php echo $fila["telefono_alum"];?></td>
				<td><?php echo $fila["email_alum"];?></td>
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
	$pdf->output('ListaTercero.pdf');

?>