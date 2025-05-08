<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Edadveri = floatval($_POST["edad"]);
    if ($Edadveri < 20 && $Edadveri > 10) {
        echo "Califica para el descuento";
    }else {
        echo "No califica para el descuento";
    }

} else {
    echo "Error en la verificacion";
}
    
?>