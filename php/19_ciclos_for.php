<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclos For (PHP)</title>
</head>
<body>
	<h1>Ciclos For (PHP)</h1>
	<hr>
	<h4>Números Multiplos de 3</h4>
	<?php 
		for ($i=0; $i <= 100 ; $i++) { 
			if($i % 3 == 0) {
				echo $i."<br>";
			}
		}

	?>
</body>
</html>