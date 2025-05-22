<?php
$tripulacion= ['alex rider', 'mia kovalik', 'raj patel', 'elena vega', 'jules bergman' ];

//foreach ($tripulacion as $tripulante){
//f ($tripulante == "raj patel"){
 //   echo "$tripulante";
//}
//}
echo $tripulacion[2];
$tripulacion[1]=  ' nadia petrov';
echo $tripulacion[1];
$tripulacion[] = ['sam carter', 'leo wu ', 'zara khan'];
var_dump($tripulacion);
unset($tripulacion [0]);
array_unshift($tripulacion, 'dmitri volkov', 'yuki tanaka');
var_dump($tripulacion);
?>