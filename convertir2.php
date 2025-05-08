<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$cantidadEnPesos = floatval($_POST["pesos"]);
$moneda = ($_POST["moneda"]);
$valorDolar = 40;
$valorEuro = 43;
$valorReal = 8;
switch ($moneda) {
    case "Dolares":
        $cantidadTotalDolares = $cantidadEnPesos / $valorDolar;
echo "Resultado de la conversion: $cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalDolares . " dolares";
        break;
    case "Euros":
        $cantidadTotalEuros = $cantidadEnPesos / $valorEuro;
echo "Resultado de la conversion: $cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalEuros . " euros";
        break;
    case "Reales":
        $cantidadTotalReales = $cantidadEnPesos / $valorReal;
echo "Resultado de la conversion: $cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalReales . " reales";
        break;
}

} else {
    echo "Error en la solicitud";
}
?>