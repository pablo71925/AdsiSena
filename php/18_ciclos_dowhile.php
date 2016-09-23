<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclos Do While (PHP)</title>
</head>
<body>
	<h1>Ciclos Do While (PHP)</h1>
	<hr>
	<h4>Números Impares</h4>
	<?php 
		$i = 0;
		do {
			if($i % 2 != 0) {
				echo $i."<br>";
			}
			$i++;
		} while ($i <= 100);
	?>
</body>
</html>