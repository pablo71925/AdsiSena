<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Generador claves en MD5</title>
</head>
<body>
	<fieldset>
		<legend><h2>Generador</h2></legend>
		<form action="" method="post">
			<input type="text" name="cadena" placeholder="Ingrese Clave">
			<br>
			<input type="submit" value="Encriptar">
		</form>
	</fieldset>
	<?php 

		if ($_POST) {
			$cadena = $_POST['cadena'];
			$cadena = md5($cadena);
			echo "<h2> clave: ".$_POST['cadena']."</h2>";
			echo "<h2> md5: ".$cadena."</h2>";
		}
	?>
</body>
</html>