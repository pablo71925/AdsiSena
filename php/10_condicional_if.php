<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional if (PHP)</title>
</head>
<body>
	<h1>Condicional if (PHP)</h1>
	<hr>
	<?php 

		$dia = date('N');
		if($dia == 3) {
			echo "<h4>Hoy es miercoles!</h4>";
		}

	?>
</body>
</html>