<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros (PHP)</title>
</head>
<body>
	<h1>Filtros (PHP)</h1>
	<hr>
	<?php 

		$numero = 250;
		$opciones = array(
			'options' => array(
				'min_range' => 0,
				'max_range' => 255
				)
			);

		if (!filter_var($numero, FILTER_VALIDATE_INT, $opciones)) {
			echo "<h4>No es un número entero | Debe ser mayor a 0 y menor de 255 </h4>";
		} else {
			echo "<h4>Es un número entero entre 0 y 255</h4>";
		}
	?>
	
</body>
</html>