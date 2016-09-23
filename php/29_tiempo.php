<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tiempo (PHP)</title>
</head>
<body>
	<h1>Tiempo (PHP)</h1>
	<hr>
	<?php 

		// Mañana
		$tiempo = mktime(12,1,0, date('m'), date('d')+1, date('Y') );
		echo date('r', $tiempo);

	?>
</body>
</html>