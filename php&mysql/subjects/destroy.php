<?php session_start(); ?>
<?php if ($_GET['idm']): ?>
<?php include '../db/connection.php'; ?>
<?php
	$idm = $_GET['idm'];
	$sql = "DELETE FROM materias WHERE idm = $idm";
	if(mysqli_query($conn, $sql)) {
        $_SESSION['action'] = 'Eliminada';
        echo "<script>";
        echo "window.location.replace('../subjects.php');";
        echo "</script>";
   	}

?>
<?php include '../db/disconnection.php'; ?>
<?php endif ?>