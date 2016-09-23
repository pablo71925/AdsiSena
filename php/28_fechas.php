<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fechas (PHP)</title>
</head>
<body>
	<h1>Fechas (PHP)</h1>
	<hr>
	<?php 

	echo date('d-m-Y')."<br>";
	echo date('d/m/y')."<br>";
	// z: número de dias hasta el día de hoy
	// w: número de la semana
	// L: 1-Si el año es bisiesto, 0- Si no lo es 
	echo date('z/w/L')."<br>"; 
	echo date('d-m-Y h:i:s')."<br>";
	echo date('h:i:s A')."<br>";
	echo date('d M Y')."<br>";
	echo date('r')."<br>";

	echo date('r', '1519900000');

	?>
</body>
</html>