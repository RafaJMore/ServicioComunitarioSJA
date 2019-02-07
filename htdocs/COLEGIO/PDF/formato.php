<?php
	ob_start();
?>

<page>






















</page>

<?php

	$content = ob_get_clean();
	require_once('html2pdf/html2pdf.class.php');
	$pdf = new HTML2PDF('P','LETTER','es','UTF-8');
	$pdf->writeHTML($content);
	$pdf->output('formato.pdf');

?>