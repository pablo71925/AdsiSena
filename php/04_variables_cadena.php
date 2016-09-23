<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables de tipo Cadena (PHP)</title>
</head>
<body>
	<h1>Variables de tipo Cadena (PHP)</h1>
	<hr>
	<?php 

		$cadena1 = "Bienvenidos";
		$cadena2 = 'ADSI 901197';

		// Se concatena con ( . )
		$concatenar = "<h2>".$cadena1." ".$cadena2."</h2>";
		echo $concatenar;

		// Logitud de Cadena
		echo "La longitud de la cadena es: ".strlen($concatenar);

		// Posición de Caracteres
		echo "<br> La posición de la palabra ADSI es: ".strpos($concatenar, "ADSI");

		// Minusculas
		echo "<br> La cadena en minusculas: ".strtolower("Bienvenidos ADSI 901197");

		// Mayusculas
		echo "<br> La cadena en mayusculas: ".strtoupper("Bienvenidos ADSI 901197");

		// Revertir Cadena
		echo "<br> La cadena en mayusculas: ".strrev("Bienvenidos ADSI 901197");

		// Reemplazar
		echo "<br> La cadena reemplazada es: ".str_replace("ADSI", "SENA", "Bienvenidos ADSI 901197");

		// Intercambiar Caracteres
		echo "<br> La cadena intercambiada es: ".str_shuffle("Bienvenidos ADSI 901197");


	?>
</body>
</html>