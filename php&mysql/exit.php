<?php

session_start();

unset($_SESSION['idu']);
unset($_SESSION['nombres']);
unset($_SESSION['foto']);

session_destroy();

header('Location: index.php');
exit;
?>