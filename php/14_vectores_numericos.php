<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vectores Numéricos (PHP)</title>
</head>
<body>
	<h1>Vectores Numéricos (PHP)</h1>
	<hr>
	<?php 

		// Indice Automático
		$frutas = array('Manzana', 'Pera', 'Guayaba', 'Fresa', 'Sandia');

		// Indice Manual
		$frutas[5] = 'Papaya';
		$frutas[6] = 'Banano';
		$frutas[7] = 'Mango';
		$frutas[8] = 'Curuba';
		$frutas[9] = 'Mandarina';

		// Mostrar en una lista las frutas
		echo var_dump($frutas);

	?>
</body>
</html>