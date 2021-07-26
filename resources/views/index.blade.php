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
    <h1>Hello</h1>

    <div id="app">
        <example-component></example-component>

    @php
    
    //$data = [[200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200],
    //    [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3],
    //    [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2],
    //    [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]];

    $data = [['label' => 'Tokyo',    'values' => [200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200]],
             ['label' => 'New York', 'values' => [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]],
             ['label' => 'London',   'values' => [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]],
             ['label' => 'Berlin',   'values' => [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]],
    ];

    $series = [
        'title' => 'Monthly Average Rainfall',
        'subtitle' => 'Source: WorldClimate.com',
        'y_axis' => 'Rainfall (mm)',
        'categories' => ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        'data' => $data,
    ];

    $data2 = [['label' => 'John', 'values' => [5, 3, 4, 7, 2]],
             ['label' => 'Jane', 'values' => [2, 2, 3, 2, 1]],
             ['label' => 'Joe',   'values' => [3, 4, 4, 2, 5]],
    ];

    $series2 = [
        'title' => 'Stacked column chart',
        'subtitle' => '',
        'y_axis' => 'Total fruit consumption',
        'categories' => ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas'],
        'data' => $data2,
    ];

    @endphp

        <h2>Basic Line</h2>
        <basic-line-chart :series='@json($series)'></basic-line-chart>

        <h2>Column</h2>
        <column-chart :series='@json($series)'></column-chart>
        
        <h2>Stacked Column</h2>
        <stacked-column-chart :series='@json($series2)'></stacked-column-chart>

        <h2>Stacked Percentage Column</h2>
        <stacked-percentage-column-chart :series='@json($series2)'></stacked-percentage-column-chart>
        
        <h2>Sankey</h2>
        <sankey-chart></sankey-chart>
        
        <h2>Treemap</h2>
        <treemap></treemap>
        
        <!-- <h2>Line</h2> -->
        <!-- <line-chart title="Line Chart - Constant" :values="[5, 5, 5]"></line-chart> -->

        <!-- <h2>Pie</h2> -->
        <!-- <pie-chart></pie-chart> -->
        
        <!-- <h2>Combo</h2> -->
        <!-- <combo-chart></combo-chart> -->

        <!-- <h2>More Lines</h2> -->
        <!-- <line-chart title="Line Chart 1" :values="[3, 2, 1]"></line-chart> -->
        
        <!-- <line-chart :values="[10, 15, 5]"></line-chart> -->
        
        <!-- <chart-demo title="My Title"
                    :values="[10, 0, 8, 2, 6, 4, 5, 5]">
        </chart-demo> -->
        <!-- <highcharts :options="chartOptions"></highcharts> -->
    </div>
    <script src="/js/app.js"></script>
</body>
</html>