<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/hombre', function () {
    return "ROSARIO ES NOVIA DE MARCOS Y BAUTISTA A LA VEZ";
});
