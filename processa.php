<?php

if ($_POST) {
	$distancia = $_POST['distancia'];
    $consumo = $_POST['consumo'];

 if(is_numeric($distancia) && is_numeric($consumo)) {

 	if($distancia > 0 && $consumo > 0) {
 		$valorGasolina = 4.8;
        $valorAlcool = 3.8;
        $valorDiesel = 3.9;

        $calculaGasolina = ($distancia/$consumo) * $valorGasolina;
        $calculaGasolina = number_format($calculaGasolina, 2, ',', '.');
        $calculaAlcool = ($distancia/$consumo) * $valorAlcool;
        $calculaAlcool = number_format($calculaAlcool, 2, ',', '.');
        $calculaDiesel = ($distancia/$consumo) * $valorDiesel;
        $calculaDiesel = number_format($calculaDiesel, 2, ',', '.');

        echo "O valor do Consumo de Gasolina é de: R$". $calculaGasolina. ".</p>";
        echo "O valor do Consumo de Alcool é de: R$". $calculaAlcool. ".</p>";
        echo "O valor do Consumo de Diesel é de: R$". $calculaDiesel. ".</p>";     
 	} else {
 		echo "Só numeros maiores que zero.";
 	}

 } else {
 	echo "Só é pertido valores numericos";
 }
} else {
	echo "Não ha nada aqui.";
}

?>
