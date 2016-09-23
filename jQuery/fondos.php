<?php 


if (isset($_POST['serie'])) {
	$serie = $_POST['serie'];

	if ($serie == 's1') {
		echo "url(imgs/bg1.png)";
	}
	else if ($serie == 's2') {
		echo "url(imgs/bg2.jpg)";
	}
	else if ($serie == 's3') {
		echo "url(imgs/bg3.jpg)";
	}	

}

?>