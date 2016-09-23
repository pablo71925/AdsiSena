<?php session_start(); ?>
<?php if ($_GET['idn']): ?>
<?php include '../db/connection.php'; ?>
<?php
	$idn = $_GET['idn'];
	$sql = "DELETE FROM notas WHERE idn = $idn";
	if(mysqli_query($conn, $sql)) {
        $_SESSION['action'] = 'Eliminada';
        echo "<script>";
        echo "window.location.replace('../notes.php');";
        echo "</script>";
   	}

?>
<?php include '../db/disconnection.php'; ?>
<?php endif ?>