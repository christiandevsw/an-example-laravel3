<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Inicio';
});


Route::get('/hello', function () {
    return 'Hello world';
});
