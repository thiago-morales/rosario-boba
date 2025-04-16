<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/listado', function () {
$herramientas = [[
        "nombre" => 'Martillo',
        'cantidad' => 12
],
[
    "nombre" => 'Alicate',
    'cantidad' => 8     
]
];

    return view('herramientas/lista_herramientas')-> with ('h', $herramientas);
});
