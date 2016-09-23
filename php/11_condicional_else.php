<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional else (PHP)</title>
</head>
<body>
	<h1>Condicional else (PHP)</h1>
	<hr>
	<?php 

		$dia = date('N');
		if($dia != 3) {
			echo "<h4>Cualquier día menos miercoles</h4>";
		} else {
			echo "<h4>Hoy es miercoles!</h4>";
		}
	?>
</body>
</html>