<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/export', function () {
    return view('export-chart');
});

// Route::get('/', function () {
//     return view('welcome');
// });
