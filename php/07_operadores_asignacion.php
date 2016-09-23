<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Asignación</title>
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
	<h1>Operadores Asignación</h1>
	<table>
		<tr>
			<th>Operador</th>
			<th>Ejemplo</th>
			<th>Es Igual que</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td>=</td>
			<td>$x = 3;</td>
			<td>$x = 3;</td>
			<td><?php $x = 3; echo $x;?></td>
		</tr>
		<tr>
			<td>+=</td>
			<td>$x += 3;</td>
			<td>$x = $x + 3;</td>
			<td><?php echo $x += 3; ?></td>
		</tr>
		<tr>
			<td>-=</td>
			<td>$x -= 3;</td>
			<td>$x = $x - 3;</td>
			<td><?php echo $x -= 3; ?></td>
		</tr>
		<tr>
			<td>*=</td>
			<td>$x *= 3;</td>
			<td>$x = $x * 3;</td>
			<td><?php echo $x *= 3; ?></td>
		</tr>
		<tr>
			<td>/=</td>
			<td>$x /= 3;</td>
			<td>$x = $x / 3;</td>
			<td><?php echo $x /= 3; ?></td>
		</tr>
		<tr>
			<td>%=</td>
			<td>$x %= 3;</td>
			<td>$x = $x % 3;</td>
			<td><?php echo $x %= 3; ?></td>
		</tr>
		<tr>
			<td>.=</td>
			<td>$x .= ' Veces';</td>
			<td>$x = $x . ' Veces';</td>
			<td><?php echo $x .= ' Veces'; ?></td>
		</tr>
	</table>
</body>
</html>