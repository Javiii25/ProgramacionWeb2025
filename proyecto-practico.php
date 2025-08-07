<?php
/*
 * ====================================================
 * Sello de desarrollador
 * ====================================================
 * Nombre: Javier Leiva e Ignacio del Río
 * * Videojuego Insignia: NBA 2k25 y League of Legends
 * ====================================================
 */
/*1)
 */
$videojuego = ['titulo' => 'The Legend of Zelda', 'Plataforma' => 'NES', 'Año' => 1986, 'Precio' => 50];
/*2)
 */
foreach ($videojuego as $key => $value) {
    echo $value . " ";
}

/*3)
 */
$videojuego['stock'] = 10;
$videojuego['Venta'] = 'Verdadero';
foreach ($videojuego as $key => $value) {
    echo $value . " ";
}
/*4)
 */
$inventario = [
    'The Legend of Zelda' => [
        'Plataforma' => 'NES',
        'Año' => '1986',
        'Precio' => '50',
        'Stock' => 10,
        'EnVenta' => 'verdadero'
    ],
    'Super Mario Bros 3' => [
        'Plataforma' => 'NES',
        'Año' => '1988',
        'Precio' => '45',
        'Stock' => 15,
        'EnVenta' => 'verdadero'
    ],
    'Chrono Trigger' => [
        'Plataforma' => 'SNES',
        'Año' => '1995',
        'Precio' => 80,
        'Stock' => '5',
        'EnVenta' => 'Verdadero'
    ]





];
$inventario['Rocket League']= [
'Plataforma' => 'PlayStation 4',
'Año' => '2015',
'Precio' => '99',
'Stock' => 15,
'EnVenta' => 'verdadero'
];
/*5)
 */
foreach ($inventario as $juego => $detalles) {
   echo "Titulo: $juego\n";
   foreach ($detalles as $clave => $value) {
    echo "$clave: $value\n <br>";

}
}
/*6)
 */
var_dump($inventario);
foreach ($inventario as $juego => &$detalles) {
    if($detalles['Plataforma'] == "NES") {
        $detalles['Precio'] = $detalles['Precio'] * 0.9;
    }
}
var_dump($inventario);
/*7)
*/
$busqueda = busqueda($inventario);




?>