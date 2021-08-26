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
    
    $data29 = [
             ['label' => 'Full-time', 'color' => '#217ca3', 'values' => [82.9, 88.4, 75.7, 75.8, 75.8]],
             ['label' => 'Part-time', 'color' => '#8d230f', 'values' => [25.0, 50.0, 0.0, 66.7, 66.7]],
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

    <div id="app">

    <h2>Figure 29 - Fall-to-Spring Retention of First-time, First-semester TRAD Freshman</h2>
    <!-- <stacked-percentage-column-chart 
        :series='@json($series29)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-percentage-column-chart> -->
    
    <column-chart-for-percentages  
        :series='@json($series29)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart-for-percentages>
   

    @php
    
    $data30 = [
             ['label' => 'Full-time', 'color' => '#217ca3', 'values' => [50.5, 53.7, 48.5, 57.6, 57.6]],
             ['label' => 'Part-time', 'color' => '#8d230f', 'values' => [50.0, 0.0, 0.0, 0.0, 0.0]],
    ];

    $series30 = [
        'title' => "Fall-to-Fall",
        'subtitle' => "Retention of First-time, First-semester TRAD Freshman (F1)",
        'x_axis' => '',
        'y_axis' => 'Percentage (%)',
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
    
    <column-chart-for-percentages 
        :series='@json($series30)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart-for-percentages>

</div>

    <script src="/js/app.js"></script>
</body>
</html>