<?php
	//index.php

	//ubicacion csv
	define('CSV', '100Records.csv');

	//leer csv
	$readCsv = array_map('str_getcsv', file(CSV));
?>

<html>
<table border="1">

<?php
	//recorremos filas del csv
	foreach ($readCsv as $itemCsv) {
		echo '<tr>';
		
		//recorremos celdas del csv
		foreach ($itemCsv as $elementoItemCSV) {
			echo '<td>';
			
			//mostramos la celda
			echo $elementoItemCSV;
			
			echo '</td>';
		}
		
		echo '</tr>';

	}
?>

</table>
</html>
