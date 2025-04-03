<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$cantidadEnPesos = floatval($_POST["pesos"]);
$valorDolar = 40;
$cantidadTotalDolares = $cantidadEnPesos / $valorDolar;
echo "Resultado de la conversion: ";
echo "$cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalDolares . " dolares";
} else {
    echo "Error en la solicitud";
}
?>