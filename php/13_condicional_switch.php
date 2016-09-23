<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional switch (PHP)</title>
</head>
<body>
	<h1>Condicional switch (PHP)</h1>
	<hr>
	<?php 

		$dia = date('N');
		
		switch ($dia) {
			case 1:
				echo "<h4>Hoy es Lunes</h4>";
				break;
			case 2:
				echo "<h4>Hoy es Martes</h4>";
				break;
			case 3:
				echo "<h4>Hoy es Miercoles</h4>";
				break;
			case 4:
				echo "<h4>Hoy es Jueves</h4>";
				break;
			case 6:
				echo "<h4>Hoy es Viernes</h4>";
				break;				
			default:
				echo "<h4>Hoy es Sabado o Domingo</h4>";
				break;
		}
	?>
</body>
</html>