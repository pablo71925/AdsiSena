<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Comparación (PHP)</title>
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
	<h1>Operadores Comparación (PHP)</h1>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripción</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td>==</td>
			<td>Es Igual</td>
			<td>5==8</td>
			<td><?php echo var_dump(5==8); ?></td>
		</tr>
		<tr>
			<td>!=</td>
			<td>No es Igual</td>
			<td>5!=8</td>
			<td><?php echo var_dump(5!=8); ?></td>
		</tr>
		<tr>
			<td> <> </td>
			<td>No es Igual</td>
			<td>5<>8</td>
			<td><?php echo var_dump(5<>8); ?></td>
		</tr>
		<tr>
			<td> 5 > 8</td>
			<td>Es Mayor que</td>
			<td>5>8</td>
			<td><?php echo var_dump(5>8); ?></td>
		</tr>
		<tr>
			<td> 5 < 8</td>
			<td>Es Menor que</td>
			<td>5<8</td>
			<td><?php echo var_dump(5<8); ?></td>
		</tr>
		<tr>
			<td> 5 >= 8</td>
			<td>Es Mayor o Igual que</td>
			<td>5>=8</td>
			<td><?php echo var_dump(5>=8); ?></td>
		</tr>
		<tr>
			<td> 5 <= 8</td>
			<td>Es Menor o Igual que</td>
			<td>5<=8</td>
			<td><?php echo var_dump(5<=8); ?></td>
		</tr>
	</table>
</body>
</html>