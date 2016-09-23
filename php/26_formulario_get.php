<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Método GET (PHP)</title>
</head>
<body>
	<h1>Formulario Método GET (PHP)</h1>
	<hr>
	<form action="" method="get">
		<fieldset>
		<legend><h4>Datos Personales</h4></legend>
		<input type="text" name="nombre" placeholder="Nombre Completo">
		<br>
		<input type="number" name="edad" placeholder="Edad">
		<br>
		<input type="submit" value="Enviar por GET">
		</fieldset>
	</form>

	<?php

		if($_GET) {
			echo "<li> El Nombre es: ".$_GET['nombre']."</li>";
			echo "<li> El Edad es: ".$_GET['edad']."</li>";
		}

	?>
	
</body>
</html>