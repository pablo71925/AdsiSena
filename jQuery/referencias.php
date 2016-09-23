<?php 

if (isset($_GET['marca'])) {
	$marca = $_GET['marca'];
	if ($marca == 1){
		echo "<option> Gol </option>";
		echo "<option> Polo </option>";
		echo "<option> Golf </option>";
		echo "<option> Jetta </option>";
	}
	else if ($marca == 2) {
		echo "<option> Clio </option>";
		echo "<option> Sandero </option>";
		echo "<option> Megane 3 </option>";
		echo "<option> Koleos </option>";
	}
	else if ($marca == 3) {
		echo "<option> Spark </option>";
		echo "<option> Aveo </option>";
		echo "<option> Sonic </option>";
		echo "<option> Tracker </option>";
	}
}

?>