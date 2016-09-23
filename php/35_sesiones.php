<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones (PHP)</title>
</head>
<body>
	<h1>Sesiones (PHP)</h1>
	<hr>
	<?php 

		if($_GET) {
			unset($_SESSION['visitas']);
			session_destroy();
		}

		if (isset($_SESSION['visitas'])) {
			$_SESSION['visitas']++;
		} else {
			$_SESSION['visitas'] = 1;
		}

		echo "<h3>Número de Visitas: ".$_SESSION['visitas']."</h3>";

	?>
	<br>
	<a href="?action=destroy">Eliminar Sesion</a>
</body>
</html>