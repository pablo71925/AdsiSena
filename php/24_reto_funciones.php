<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reto Funciones (PHP)</title>
	<style>
		body {
			font: 14px Tahoma;
		}
		table {
			border-collapse: collapse;
			margin: 40px auto;
			width: 90%;
		}
		table td {
			border: thin dotted #999;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>Reto Funciones (PHP) - Gráficar Tablas</h1>
	<hr>
	<?php
	function graficarTabla($nf, $nc) {
		echo "<table>";
		for ($i=0; $i <= $nf ; $i++) { 
			echo "<tr>";
			for ($j=0; $j <= $nc ; $j++) { 
				echo "<td> f".$i."c".$j."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	graficarTabla(10, 10);
	?>
</body>
</html>