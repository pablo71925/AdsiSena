<?php 

setcookie('visitante', 'Jeremias Springfield', time()+60);

if($_GET) {
	// Eliminar Cookie
	setcookie('visitante', 'Jeremias Springfield', time()-60);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies (PHP)</title>
</head>
<body>
	<h1>Cookies (PHP)</h1>
	<hr>
	<?php 

	if (isset($_COOKIE['visitante'])) {
		echo "<h3>Bienvenido: ".$_COOKIE['visitante']."</h3>";
	} else {
		echo "<h3>Bienvenido</h3>";
	}

	?>
	<br>
	<a href="?action=delete">Eliminar Cookie</a>
</body>
</html>