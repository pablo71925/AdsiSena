<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vectores Asociativos (PHP) </title>
</head>
<body>
	<h1>Vectores Asociativos (PHP) </h1>
	<hr>
	<?php 

	// Vector Asociativo
	$simpsons = array('Homero' => 44, 'Marge' => 38, 'Bart' => 12, 'Liza' => 9, 'Maggie' => 2);
	$simpsons['Poochie'] = 4;
	$simpsons['Abraham'] = 94;

	// Mostrar el Arreglo
	print(var_dump($simpsons));

	?>
</body>
</html>