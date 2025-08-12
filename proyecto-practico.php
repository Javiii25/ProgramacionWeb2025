<?php
/*
 * ====================================================
 * Sello de desarrollador
 * ====================================================
 * Nombre: Javier Leiva e Ignacio del Río
 * * Videojuego Insignia: NBA 2k25 y League of Legends
 * ====================================================
 */
echo '1) <br>';

$videojuego = ['titulo' => 'The Legend of Zelda', 'Plataforma' => 'NES', 'Año' => 1986, 'Precio' => 50];
/*
 * == BITACORA DE DESARROLLO (ACTIVIDAD 1)
 * 
 * Desafio encontrado:
 * Ninguno
 * Mi descubrimiento:
 * Ninguno
 */  
echo '2)<br>';

foreach ($videojuego as $key => $value) {
    echo $value . " <br>";
}
/*
 * == BITACORA DE DESARROLLO (ACTIVIDAD 2)
 * 
 * Desafio encontrado:
 * Ninguno
 * Mi descubrimiento:
 * Ninguno
 */  
echo '3)<br>';

$videojuego['stock'] = 10;
$videojuego['Venta'] = 'Verdadero';
foreach ($videojuego as $key => $value) {
    echo $value . " <br>";
}
/*
 * == BITACORA DE DESARROLLO (ACTIVIDAD 3)
 * 
 * Desafio encontrado:
 * Ninguno
 * Mi descubrimiento:
 * Ninguno
 */  
echo '4)<br>';

$inventario = [
    'The Legend of Zelda' => [
        'Titulo' => 'The Legend of Zelda',
        'Plataforma' => 'NES',
        'Año' => '1986',
        'Precio' => '50',
        'Stock' => 10,
        'EnVenta' => 'verdadero'
    ],
    'Super Mario Bros 3' => [
        'Titulo' => 'Super Mario Bros 3',
        'Plataforma' => 'NES',
        'Año' => '1988',
        'Precio' => '45',
        'Stock' => 15,
        'EnVenta' => 'verdadero'
    ],
    'Chrono Trigger' => [
        'Titulo' => 'Chrono Trigger',
        'Plataforma' => 'SNES',
        'Año' => '1995',
        'Precio' => 80,
        'Stock' => '5',
        'EnVenta' => 'Verdadero'
    ]





];
$inventario['Rocket League']= [
    'Titulo' => 'Rocket League',
'Plataforma' => 'PlayStation 4',
'Año' => '2015',
'Precio' => '99',
'Stock' => 15,
'EnVenta' => 'verdadero'
];
/*
 * == BITACORA DE DESARROLLO (ACTIVIDAD 4)
 * 
 * Desafio encontrado:
 * Ninguno
 * Mi descubrimiento:
 * Ninguno
 */  
echo '5)<br>';

foreach ($inventario as $juego => $detalles) {
   echo "Titulo: $juego\n";
   foreach ($detalles as $clave => $value) {
    echo "$clave: $value\n <br>";

}
}
/*
 * == BITACORA DE DESARROLLO (ACTIVIDAD 5)
 * 
 * Desafio encontrado:
 * No sabiamos como mostrar solo esos dos parametros pero luego lo descubrimos con ayuda del profe
 * Mi descubrimiento:
 * Aprendimos a mostrar solo un parametro en lugar de todo el array
 */  
echo '6)<br>';

var_dump($inventario);
foreach ($inventario as $juego => &$detalles) {
    if($detalles['Plataforma'] == "NES") {
        $detalles['Precio'] = $detalles['Precio'] * 0.9;
    }
}
var_dump($inventario);
/*
 * == BITACORA DE DESARROLLO (ACTIVIDAD 6)
 * 
 * Desafio encontrado:
 * No sabiamos como actualizar su valor, pero luego aprendimos
 * Mi descubrimiento:
 * Ninguno
 */  
echo '<br>';
echo '7)<br>';

foreach ($inventario as $juego => $detalles) {
    if($detalles['Titulo'] == 'Chrono Trigger') {
        echo "<br>";
       var_dump($inventario['Chrono Trigger']);
}else {
    echo 'No se encontro el juego<br>';
}
}
echo '<br>';
/*
 * == BITACORA DE DESARROLLO (ACTIVIDAD 7)
 * 
 * Desafio encontrado:
 * Ninguno
 * Mi descubrimiento:
 * Ninguno
 */  
echo '8)<br>';
var_dump($inventario);
echo '<br>';

$inventario['Sonic the Hedgehog']= [
    'Titulo' => 'Sonic the Hedgehog',
'Plataforma' => 'Sega Genesis',
'Año' => '1991',
'Precio' => '55',
'Stock' => 8,
'EnVenta' => 'verdadero'
];
var_dump($inventario);
/*
 * == BITACORA DE DESARROLLO (ACTIVIDAD 8)
 * 
 * Desafio encontrado:
 * Ninguno
 * Mi descubrimiento:
 * Ninguno
 */  
echo '<br>';
echo '9)<br>';
var_dump($inventario);
echo '<br>';

$inventario['The Legend of Zelda']= [''];
echo '<br>';
var_dump($inventario);
/*
 * == BITACORA DE DESARROLLO (ACTIVIDAD 9)
 * 
 * Desafio encontrado:
 * No sabiamos como actualizar y dejar vacia la opcion, pero despues de pensar lo pudimos hacer
 * Mi descubrimiento:
 * Ninguno
 */  
?>