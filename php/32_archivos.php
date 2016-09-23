<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manejo de Archivos (PHP)</title>
</head>
<body>
	<h1>Manejo de Archivos (PHP)</h1>
	<hr>
	<?php 

	// Abrimos el Archivo
	$archivo1 = fopen('texto.txt', 'r') or exit('No se pudo abrir el archivo!');
	$archivo2 = fopen('texto.txt', 'r') or exit('No se pudo abrir el archivo!');


	// Preguntar si ya alcanzo el final del archivo
	while (!feof($archivo1)) {
		// Mostrar el texto linea a linea
		echo fgets($archivo1)."<br>";
	}
	echo "<hr>";
	while (!feof($archivo2)) {
		// Mostrar el texto caracter por caracter
		echo fgetc($archivo2)." - ";
	}

	// Cerramos el Archivo
	fclose($archivo1);
	fclose($archivo2);

	?>
</body>
</html>