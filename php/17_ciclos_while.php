<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclos While (PHP)</title>
</head>
<body>
	<h1>Ciclos While (PHP)</h1>
	<hr>
	<h4>Números Pares</h4>
	<?php 
		$i = 0;
		while ($i <= 100) {
			if($i % 2 == 0) {
				echo $i."<br>";
			}
			$i++;
		}
	?>
</body>
</html>