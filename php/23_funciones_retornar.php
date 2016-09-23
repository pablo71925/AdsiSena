<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones Retornar (PHP)</title>
</head>
<body>
	<h1>Funciones Retornar (PHP)</h1>
	<hr>
	<?php 

		function sumar($n1, $n2) {
			return $n1+$n2;
		}
		echo "<h4>La suma de 5 y 8 es: ".sumar(5,8)."</h4>";
		echo "<h4>La suma de 10 y 2 es: ".sumar(10,2)."</h4>";
		$res = sumar(129,8987);
		echo "<h4>La suma de 129 y 8987 es: ".$res."</h4>";
	?>
</body>
</html>