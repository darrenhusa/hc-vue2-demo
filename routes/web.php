<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {    
    return view('index');
});

Route::get('/sample-charts', function () {    
    return view('sample-charts');
});

Route::get('/practice', function () {    
    return view('section01-practice');
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

Route::get('/table-02', function () {
    return view('table-02');
});

Route::get('/table-03', function () {
    return view('table-03');
});

Route::get('/table-04', function () {
    return view('table-04');
});

Route::get('/section01', function () {
    return view('section01-enrollment');
});

Route::get('/section02', function () {
    return view('section02');
});

Route::get('/section03', function () {
    return view('section03');
});

Route::get('/section06', function () {
    return view('section06');
});

Route::get('/sankey-chart', function () {    
    return view('sankey-chart');
});

// Route::get('/', function () {
//     return view('welcome');
// });
