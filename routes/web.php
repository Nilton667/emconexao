<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sobre', function () {
    return view('index');
});

Route::get('/contacto', function () {
    return view('index');
});
