<?php session_start(); ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD (PHP & MYSQL)</title>
    <link rel="stylesheet" href="<?php echo $assets_css; ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $assets_css; ?>bootstrap-theme.min.css">
</head>
<body>
	<?php if (isset($_SESSION['idu'])): ?>
		<?php include 'navbar.inc'; ?>
	<?php endif ?>
    <section class="container">