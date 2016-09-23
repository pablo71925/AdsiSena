<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional else if (PHP)</title>
</head>
<body>
	<h1>Condicional else if (PHP)</h1>
	<hr>
	<?php 

		$dia = date('N');
		if($dia == 1) {
			echo "<h4>Hoy es Lunes</h4>";
		} else if ($dia == 2){
			echo "<h4>Hoy es Martes</h4>";
		}
		else if ($dia == 3){
			echo "<h4>Hoy es Miercoles</h4>";
		}
		else if ($dia == 4){
			echo "<h4>Hoy es Jueves</h4>";
		}
	?>
</body>
</html>