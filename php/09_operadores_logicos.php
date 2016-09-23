<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Lógicos (PHP)</title>
	<style>
	html { font-size: 62.5%; }
	body {
		background-color: #8dbcB7;
		color: #405553;
		font: 1.8rem Tahoma;
		text-align: center;
	}
	table {
		border-collapse: collapse;
		padding: 2%;
		margin: 40px auto;
		width: 80%;
	}
	th, td {
		border: 2px solid #688a87;
		background-color: #a4dbd6;
		padding: 2%;

	}
	th {
		background-color: #fff;
	}
	</style>
</head>
<body>
	<h1>Operadores Lógicos (PHP)</h1>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripción</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td>&&</td>
			<td> Y (AND)</td>
			<td>
				$x = 6; 
				<br>
				$y = 3;
				<br>
				($x < 10 && $y > 1)
			</td>
			<td><?php $x = 6; $y = 3; echo var_dump($x < 10 && $y > 1); ?></td>
		</tr>
		<tr>
			<td>||</td>
			<td> O (OR)</td>
			<td>
				$x = 6; 
				<br>
				$y = 3;
				<br>
				($x == 5 || $y == 5)
			</td>
			<td><?php $x = 6; $y = 3; echo var_dump($x == 5 || $y == 5); ?></td>
		</tr>
		<tr>
			<td>!</td>
			<td> Negación (NOT)</td>
			<td>
				$x = 6; 
				<br>
				$y = 3;
				<br>
				!($x == $y)
			</td>
			<td><?php $x = 6; $y = 3; echo var_dump(!($x == $y)); ?></td>
		</tr>
	</table>
</body>
</html>