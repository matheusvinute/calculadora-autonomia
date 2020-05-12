<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora de Combustivel</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<h1>Metodo para calcular o consumo</h1>
	<div class="container">
		<form method="POST" action="processa.php">
		<label>Distancia em Quilometros a Ser Percorrido(Km/l): </label>
		<input type="text" name="distancia" />

		<label>Consumo de Combustível do Veiculo(R$): </label>
		<input type="text" name="consumo" />

		<input type="submit" value="Enviar" />
	    </form>
	</div>
</body>
</html>
