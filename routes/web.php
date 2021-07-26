<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // $data = [[200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200],
    //         [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3],
    //         [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2],
    //         [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
    // ];

    // $series = [
    //     'names' => ['Tokyo', 'New York', 'London', 'Berlin'],
    //     'data' => $data,
    //     'title' => 'Monthly Average Rainfall',
    //     'subtitle' => 'Source: WorldClimate.com',
    //     'y_axis' => 'Rainfall (mm)',
    //     'categories' => ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
    // ];
    // $series = json_encode($result);

    return view('index');
    // return view('index', compact('series'));
    // return view('index', compact('data'));
});

Route::get('/export', function () {
    return view('export-chart2');
});

// Route::get('/', function () {
//     return view('welcome');
// });
