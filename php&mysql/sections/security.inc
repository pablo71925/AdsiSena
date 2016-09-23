<?php
	if(!isset($_SESSION['idu'])) {
		echo '<script>
				alert("Contenido no disponible! \nDebe iniciar sesión.");
				window.location.replace("'.$base_url.'");
			</script>';
	}