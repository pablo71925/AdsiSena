<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reto Restar Fechas (PHP)</title>
</head>
<body>
	<h1>Reto Restar Fechas (PHP)</h1>
	<hr>
	<form action="" method="post">
		<fieldset>
		<legend><h4>Fecha de Nacimiento</h4></legend>
		<select name="dia">
			<option value="">Dia</option>
			<?php  
			for ($i=1; $i <= 31 ; $i++) { 
				echo "<option value'".$i."'>".$i."</option>";
			}
			?>
		</select>
		<select name="mes">
			<option value="">Mes</option>
			<option value="01">Enero</option>
			<option value="02">Febrero</option>
			<option value="03">Marzo</option>
			<option value="04">Abril</option>
			<option value="05">Mayo</option>
			<option value="06">Junio</option>
			<option value="07">Julio</option>
			<option value="08">Agosto</option>
			<option value="09">Septiembre</option>
			<option value="10">Octubre</option>
			<option value="11">Noviembre</option>
			<option value="12">Diciembre</option>
		</select>
		<select name="ano">
			<option value="">Año</option>
			<?php 
				for ($i=1980; $i < 1997 ; $i++) { 
					echo "<option value'".$i."'>".$i."</option>";
				}
			?>
		</select>
		<br>
		<input type="submit" value="Calcular">
	</fieldset>
	</form>
	<?php 
		if($_POST) {
			$dia = $_POST['dia'];
			$mes = $_POST['mes'];
			$ano = $_POST['ano'];

			$fecha_nacimiento = mktime(0,0,0, $mes, $dia, $ano);
			$fecha_actual     = mktime(0,0,0, date('m'), date('d'), date('Y'));

			$fecha_total = $fecha_actual - $fecha_nacimiento;
			$fecha_dias  = ($fecha_total/60/60/24);
			$fecha_anos  = ($fecha_total/60/60/24/365);
			echo "<h4>".floor($fecha_dias)." Días</h4>";
			echo "<h4>".floor($fecha_anos)." Años</h4>";
		}

	?>
</body>
</html>