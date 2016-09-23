<?php session_start(); ?>
<?php if ($_GET['idu']): ?>
<?php include '../db/connection.php'; ?>
<?php
	$idu = $_GET['idu'];
	$sql = "DELETE FROM usuarios WHERE idu = $idu";
	if(mysqli_query($conn, $sql)) {
        $_SESSION['action'] = 'Eliminado';
        echo "<script>";
        echo "window.location.replace('../users.php');";
        echo "</script>";
   	}

?>
<?php include '../db/disconnection.php'; ?>
<?php endif ?>