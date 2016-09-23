<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones que reciben Parámetros (PHP)</title>
</head>
<body>
	<h1>Funciones que reciben Parámetros (PHP)</h1>
	<hr>
	<?php
		function mostrarDatos($nombre, $edad) {
			echo "<li>Nombre: ".$nombre."</li>";
			echo "<li>Edad: ".$edad."</li>";
			echo "<hr>";
		} 

		echo "<ul>";
		mostrarDatos('Homero', 48);
		mostrarDatos('Marge', 38);
		echo "</ul>";

	?>
</body>
</html>