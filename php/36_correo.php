<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enviar Correo Electrónico (PHP)</title>
</head>
<body>
	<h1>Enviar Correo Electrónico (PHP)</h1>
	<hr>
	<form action="" method="post">
		<fieldset>
			<legend><h4>Enviar Email</h4></legend>
			<input type="email" name="email" placeholder="Correo Remitente">
			<br>
			<input type="text" name="asunto" placeholder="Asunto">
			<br>
			<textarea name="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
			<br>
			<input type="submit" value="Enviar">
		</fieldset>
	</form>
	<?php 

		if($_POST) {
			$correo  = $_POST['email'];
			$asunto  = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];

			if (mail('ofac@misena.edu.co', "Asunto: $asunto", $mensaje, "De $correo")) {
				echo "<h4>El correo se envio con exito!</h4>";
			} else {
				echo "<h4>El correo no se pudo enviar!</h4>";
			}


		}

	?>
	
</body>
</html>