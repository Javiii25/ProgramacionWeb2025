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
echo $value. " ";
}

/*3)
*/
$videojuego['stock'] =  10;
$videojuego ['Venta'] = 'Verdadero';
foreach ( $videojuego as $key => $value) {
echo $value. " ";
} 
/*3)
*/
$inventario = ['The Legend of Zelda' => ['titulo' => 'The Legend of Zelda',
 'Plataforma' => 'NES',
  'Año' => '1986',
   'Precio' => '50',
    'Stock' => 10,
     'EnVenta' => 'verdadero'],
      'Super Mario Bros 3' => ['titulo' => 'Super Mario Bros 3',
       'Plataforma' => 'NES',
        'Año' => '1988',
         'Precio' => '45',
          'Stock' => 15,
           'EnVenta' => 'verdadero'],
            'Chrono Trigger' => ['titulo' => 'Chrono Trigger',
             'Platafornma' => 'SNES',
              'Año' => '1995',
               'Stock' => '5',
                'EnVenta' => 'Verdadero' ]
 ];







?>