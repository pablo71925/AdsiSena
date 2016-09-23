<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excepciones (PHP)</title>
</head>
<body>
	<h1>Excepciones (PHP)</h1>
	<hr>
	<?php 

		function verificarEdad($edad) {
			if ($edad < 18) {
				throw new Exception("Usted es menor de edad!");
			}
		}
		try {
			verificarEdad(15);
			echo "Usted es mayor de edad!";
		} catch (Exception $e) {
			echo "Mensaje: ".$e->getMessage();
		}


	?>
</body>
</html>