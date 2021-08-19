<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {    
    return view('index');
});

Route::get('/export', function () {
    return view('export-chart2');
});

Route::get('/sparklines', function () {
    return view('sparkline-demo');
});

Route::get('/table-01', function () {
    return view('table-01');
});


// Route::get('/', function () {
//     return view('welcome');
// });
