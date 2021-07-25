<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/export', function () {
    return view('export-chart2');
});

// Route::get('/', function () {
//     return view('welcome');
// });
