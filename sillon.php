<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $competencia = ($_POST["competencia"]);
    $arregloPalabras= explode( " ", $competencia);

count($competencia);

}else{
    echo 'error en la solicitud';
}


?>