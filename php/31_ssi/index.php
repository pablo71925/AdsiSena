<?php 

	require 'pages/header.inc';
	include 'pages/menu.inc';
	if($_GET) {
		switch ($_GET['sec']) {
		case 1:
			include 'pages/content.php';
			break;
		case 2:
			include 'pages/nosotros.php';
			break;	
		case 3:
			include 'pages/servicios.php';
			break;	
		case 4:
			include 'pages/contacto.php';
			break;			
		default:
			echo "<h4>Error la Página no esta!</h4>";
			break;
		}
	} else {
		include 'pages/content.php';
	}
	
	require 'pages/footer.inc';

?>