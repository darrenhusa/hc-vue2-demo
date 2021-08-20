<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highcharts Vue 2 Wrapper Demo</title>
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
</head>
<body>
    @php
    
    $data3 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [16, 271, 268, 234, 234]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [748, 640, 883, 1392, 1392]]
    ];

    $series3 = [
        'title' => 'Number of Applications - TRAD Programs',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data3,
    ];

    @endphp

    <div id="app">
        <h2>Figure 3 - TRAD Applications by Athletic Status</h2>
        <stacked-column-with-data-label-percents-chart 
            :series='@json($series3)'
            :chart-width="1200"
            :chart-height="400">
        </stacked-column-with-data-label-percents-chart>
       
    @php
    
    $data4 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [10, 147, 205, 180, 180]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [303, 208, 395, 722, 722]]
    ];

    $series4 = [
        'title' => 'Number of Accepted - TRAD Programs',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data4,
    ];

    @endphp

    
    <h2>Figure 4 - TRAD Accepted by Athletic Status</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series4)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>
    
    @php
    
    $data5 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [6, 119, 132, 131, 131]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [239, 100, 158, 296, 296]]
    ];

    $series5 = [
        'title' => 'Number of Final Accepted - TRAD Programs',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data5,
    ];

    @endphp

    <h2>Figure 5 - TRAD Final Accepted by Athletic Status</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series5)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>
    
    @php
    
    $data6 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [4, 110, 113, 96, 96]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [186, 78, 125, 125, 125]]
    ];

    $series6 = [
        'title' => 'Number of Registered - TRAD Programs',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data6,
    ];

    @endphp

    <h2>Figure 6 - TRAD Registered by Athletic Status</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series6)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>

    @php
    
    $data7 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [2, 103, 107, 90, 90]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [159, 63, 90, 81, 81]]
    ];

    $series7 = [
        'title' => 'Number of Enrolled - TRAD Programs',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data7,
    ];

    @endphp

    <h2>Figure 7 - TRAD Enrolled by Athletic Status</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series7)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>
       
</div>

    <script src="/js/app.js"></script>
</body>
</html>