<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$cantidadEnPesos = floatval($_POST["pesos"]);
$moneda = ($_POST["moneda"]);
$monedas = [40, 43, 8, 'nacho'];
//$valorDolar = 40;
//$valorEuro = 43;
//$valorReal = 8;
var_dump($monedas);
switch ($moneda) {
    case "Dolares":
        $cantidadTotalDolares = $cantidadEnPesos / $monedas[0];
echo "Resultado de la conversion: $cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalDolares . " dolares";
        break;
    case "Euros":
        $cantidadTotalEuros = $cantidadEnPesos / $monedas[1];
echo "Resultado de la conversion: $cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalEuros . " euros";
        break;
    case "Reales":
        $cantidadTotalReales = $cantidadEnPesos / $monedas[2];
echo "Resultado de la conversion: $cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalReales . " reales";
        break;
}

} else {
    echo "Error en la solicitud";
}
?>