<?php
$DiaNOLaborable = 0;
$DiaLaborable = 0;
$DiasDeLaSemana = [
    'lunes',
    'martes',
    'miercoles',
    'jueves',
    'viernes',
    'sabado',
    'domingo'
];

foreach ($DiasDeLaSemana as $dia){ 
    if ($dia == 'sabado' || $dia == 'domingo'){
        echo "$dia dia de descanso  <br>"; 
        $DiaNOLaborable++;
    }else{
        echo "$dia dia laborables <br>";
        $DiaLaborable++;
    }
}
echo "dias laborables . $DiaLaborable  <br>";
echo "dias no laborables . $DiaNOLaborable  <br>";
?>