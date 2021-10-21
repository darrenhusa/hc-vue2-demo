<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section 02</title>
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
</head>
<body>

@php

    $data_alt = ['values' => [79.9, 51.4, 69.0, 75.0],
                 'color' => ['blue', 'red', 'green', 'purple']];
    
    $series20 = [
        'title' => '5-Year Average Retention Rates with Retention Goals',
        'subtitle' => '(Full-time Traditional)',
        'y_axis_max' => 100,
        'y_axis_visible' => true,
        'categories' => ['F1 to F2', 'F1 to SO', 'SO to JR', 'JR to SR'],
        'data' => $data_alt,
    ];

    @endphp

<div id="app">

    <h2>Figure 20 - 5-Year Average Retention Rates with Retention Goals</h2>
    <combo-chart
        :series='@json($series20)'
        :chart-width="1200"
        :chart-height="600">
    </combo-chart>

@php
    
    $data29 = [
             ['label' => 'Full-time', 'color' => '#217ca3', 'values' => [82.9, 88.4, 75.7, 75.8, 70.2]],
             ['label' => 'Part-time', 'color' => '#8d230f', 'values' => [25.0, 50.0, 0.0, 66.7, 12.5]],
    ];

    $series29 = [
        'title' => "Fall-to-Spring",
        'subtitle' => "Retention of First-time, First-semester TRAD Freshman (F1)",
        'x_axis' => '',
        'y_axis' => 'Percentage (%)',
        'categories' => ['Fall 2016-Spring 2017', 'Fall 2017-Spring 2018', 'Fall 2018-Spring 2019', 
                         'Fall 2019-Spring 2020', 'Fall 2020-Spring 2021'],
        'data' => $data29,
    ];

    @endphp

    <h2>Figure 29 - Fall-to-Spring Retention of First-time, First-semester TRAD Freshman</h2>
    <!-- <stacked-percentage-column-chart 
        :series='@json($series29)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-percentage-column-chart> -->
    
    <column-chart-for-percentages2  
        :series='@json($series29)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart-for-percentages2>
   

    @php
    
    $data30 = [
             ['label' => 'Full-time', 'color' => '#217ca3', 'values' => [50.5, 53.7, 48.5, 57.6, 42.7]],
             ['label' => 'Part-time', 'color' => '#8d230f', 'values' => [50.0, 0.0, 0.0, 0.0, 25.0]],
    ];

    $series30 = [
        'title' => "Fall-to-Fall",
        'subtitle' => "Retention of First-time, First-semester TRAD Freshman (F1)",
        'x_axis' => '',
        'y_axis' => 'Percentage (%)',
        'y_axis_max' => 100,
        'categories' => ['Fall 2016-Fall 2017', 'Fall 2017-Fall 2018', 'Fall 2018-Fall 2019', 
                         'Fall 2019-Fall 2020', 'Fall 2020-Fall 2021'],
        'data' => $data30,
    ];

    @endphp

    <div id="app">

    <h2>Figure 30 - Fall-to-Fall Retention of First-time, First-semester TRAD Freshman</h2>
    <!-- <stacked-percentage-column-chart 
        :series='@json($series30)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-percentage-column-chart> -->
    
    <column-chart-for-percentages2 
        :series='@json($series30)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart-for-percentages2>

</div>

    <script src="/js/app.js"></script>
</body>
</html>