<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclos Foreacg (PHP)</title>
</head>
<body>
	<h1>Ciclos Foreach (PHP)</h1>
	<hr>
	<h4>Mostrar Arreglo</h4>
	<?php 

		$bicis = array('Santa Cruz', 'Trek', 'Specialized', 'Cube', 'Scott', 'Cannondale', 'YT Industries', 'Yeti', 'Giant');

		foreach ($bicis as $bici) {
			echo $bici."<br>";
		}
	?>
</body>
</html>