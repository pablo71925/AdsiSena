<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros (email, url) PHP</title>
</head>
<body>
	<h1>Filtros (email, url) PHP</h1>
	<hr>
	<form action="" method="post">
	<fieldset>
		<legend><h4>Datos</h4></legend>
		<input type="text" name="email" placeholder="Correo Electrónico">
		<br>
		<input type="text" name="url" placeholder="Dirección de Internet">
		<br>
		<input type="submit" value="Verificar">
	</fieldset>
	</form>
	<?php 

	if ($_POST) {

		// Validar Correo Electrónico
		if(!filter_has_var(INPUT_POST, 'email')) {
			echo "El campo de correo electrónico no existe!";
		} else {
			if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
				echo "El correo Electronico ".$_POST['email']." no es valido!";
			} else {
				echo "El correo Electronico ".$_POST['email']." es valido!";
			}
		}

		echo "<br><br>";

		// Validar URL
		if(!filter_has_var(INPUT_POST, 'url')) {
			echo "El campo de url no existe!";
		} else {
			if (!filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
				echo "La ruta de internet ".$_POST['url']." no es valida!";
				echo "<br>";
				$url_limpia = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
				echo "La ruta de internet desinfectada es: ".$url_limpia;
			} else {
				echo "El ruta de internet ".$_POST['url']." es valida!";
			}
		}



	}

	?>
</body>
</html>