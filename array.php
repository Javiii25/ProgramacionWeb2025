<?php
$arrayvacio = [];
$arrayvacio[3] = 'algo';
//var_dump($arrayvacio);
//in_array('algo', $arrayvacio);
//var_dump(in_array('algo', $arrayvacio));
//var_dump(count($arrayvacio));


$planetas=[];
$planetas[] = 'Marte';
//var_dump($planetas);
$planetas[] = 'Tierra';
//var_dump($planetas);
$planetas[] = 'Venus';
//var_dump($planetas);

foreach ($planetas as $key => $value) {
    # code...
var_dump($value);
}
?>