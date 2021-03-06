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

    $data = [['label' => 'Tokyo', 'color' => 'blue', 'showDataLabels' => true,  'values' => [200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200, 200]],
             ['label' => 'New York', 'color' => 'red', 'showDataLabels' => false, 'values' => [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]],
             ['label' => 'London', 'color' => 'green',  'showDataLabels' => false, 'values' => [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]],
             ['label' => 'Berlin', 'color' => 'purple', 'showDataLabels' => false, 'values' => [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]],
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

    // treemap
    $data3 = [['name' => 'A', 'value' => 6, 'colorValue' => 1],
              ['name' => 'B', 'value' => 6, 'colorValue' => 2],
              ['name' => 'C', 'value' => 4, 'colorValue' => 3],
              ['name' => 'D', 'value' => 3, 'colorValue' => 4],
              ['name' => 'E', 'value' => 2, 'colorValue' => 5],
              ['name' => 'F', 'value' => 2, 'colorValue' => 6],
              ['name' => 'G', 'value' => 1, 'colorValue' => 7],
    ];

    $series3 = [
        'title' => 'Highcharts Treemap',
        'data' => $data3
    ];

    $data4 = [['Accounting', 'Accounting2', 2],
           ['Accounting', 'Health Science2', 1],

          ['Biomedical Science', 'Biomedical Science2', 7],
          ['Biomedical Science', 'General Studies2', 1],
          ['Biomedical Science', 'Psychology2', 1],
          ['Biomedical Science', 'Stop-out2', 4],

          ['Business Management', 'Business Management2', 21],
          ['Business Management', 'Stop-out2', 4],
          ['Business Management', 'Psychology2', 1],
          ['Business Management', 'Digital & Studio Arts2', 1],

          ['Criminal Justice', 'Criminal Justice2', 9],
          ['Criminal Justice', 'Business Management2', 2],
          ['Criminal Justice', 'Stop-out2', 6],

          ['Digital & Studio Arts', 'Digital & Studio Arts2', 2],
          ['Digital & Studio Arts', 'Stop-out2', 8],

          ['Education', 'Education2', 5],
          ['Education', 'General Studies2', 2],
          ['Education', 'Human Services2', 1],
          ['Education', 'Business Management2', 1],

          ['English', 'English2', 3],
          ['English', 'Education2', 1],

          ['Forensic Science', 'Forensic Science2', 1],
          ['Forensic Science', 'Stop-out2', 4],

          ['General Studies', 'General Studies2', 8],
          ['General Studies', 'Education2', 1],
          ['General Studies', 'Stop-out2', 6],

          ['Health Science', 'Health Science2', 5],
          ['Health Science', 'Stop-out2', 1],

          ['Human Services', 'Human Services2', 4],

          ['Kinesiology', 'Kinesiology2', 6],
          ['Kinesiology', 'Digital & Studio Arts2', 1],
          ['Kinesiology', 'Psychology2', 1],
          ['Kinesiology', 'Stop-out2', 2],

          ['Medical Lab Science', 'Criminal Justice2', 1],

          ['Psychology', 'Psychology2', 5],
          ['Psychology', 'Stop-out2', 4],

          ['Accounting2', 'Accounting3', 1],
          ['Accounting2', 'Health Science3', 1],
          ['Accounting2', 'Stop-out3', 1],

          ['Biomedical Science2', 'Biomedical Science3', 5],
          ['Biomedical Science2', 'Psychology3', 1],
          ['Biomedical Science2', 'Stop-out3', 7],

          ['Business Management2', 'Business Management3', 13],
          ['Business Management2', 'Digital & Studio Arts3', 1],
          ['Business Management2', 'Psychology3', 2],
          ['Business Management2', 'Stop-out3', 11],

          ['Criminal Justice2', 'Criminal Justice3', 7],
          ['Criminal Justice2', 'Business Management3', 1],
          ['Criminal Justice2', 'Stop-out3', 9],

          ['Digital & Studio Arts2', 'Digital & Studio Arts3', 2],
          ['Digital & Studio Arts2', 'Stop-out3', 8],

          ['Education2', 'Education3', 3],
          ['Education2', 'Business Management3', 1],
          ['Education2', 'Psychology3', 1],
          ['Education2', 'Stop-out3', 4],

          ['English2', 'English3', 2],
          ['English2', 'Stop-out3', 2],

          ['Forensic Science2', 'Forensic Science3', 1],
          ['Forensic Science2', 'Stop-out3', 4],

          ['General Studies2', 'General Studies3', 2],
          ['General Studies2', 'Human Services3', 1],
          ['General Studies2', 'Stop-out3', 12],

          ['Health Science2', 'Health Science3', 2],
          ['Health Science2', 'Stop-out3', 4],

          ['Human Services2', 'Human Services3', 1],
          ['Human Services2', 'Stop-out3', 3],

          ['Kinesiology2', 'Kinesiology3', 4],
          ['Kinesiology2', 'Digital & Studio Arts3', 1],
          ['Kinesiology2', 'Stop-out3', 5],

          ['Medical Lab Science2', 'Stop-out3', 1],

          ['Psychology2', 'Psychology3', 2],
          ['Psychology2', 'Business Management3', 1],
          ['Psychology2', 'Human Services3', 1],
          ['Psychology2', 'Stop-out3', 5]];
    
        $series4 = ['data' => $data4];

    @endphp

        <h2>Basic Line</h2>
        <basic-line-chart 
            v-bind:series='@json($series)'
            v-bind:chart-width="1200"
            v-bind:chart-height="400">
        </basic-line-chart>

        <h2>Column</h2>
        <column-chart 
            :series='@json($series)'
            :chart-width="1500"
            :chart-height="500">
        </column-chart>
        
        <!-- <h2>Column with data table</h2>
        <column-chart showTable="True" :series='@json($series)'></column-chart>
         -->
        <h2>Stacked Column</h2>
        <stacked-column-chart 
            :series='@json($series2)'
            :chart-width="1200"
            :chart-height="400">
        </stacked-column-chart>

        <h2>Stacked Column with data label percents</h2>
        <stacked-column-with-data-label-percents-chart 
            :series='@json($series2)'
            :chart-width="1200"
            :chart-height="400">
        </stacked-column-with-data-label-percents-chart>

        <!-- <stacked-column-with-data-label-percents-chart :show-data-table="true" :series='@json($series2)'>
        </stacked-column-with-data-label-percents-chart> -->

        <h2>Stacked Percentage Column</h2>
        <stacked-percentage-column-chart 
            :series='@json($series2)'
            :chart-width="1500"
            :chart-height="500">
        </stacked-percentage-column-chart>
        
        <h2>Sankey</h2>
        <h3>Fall 2020 to Spring 2021 to Fall 2021 TRAD Retention in Majors Sankey</h3>
        <sankey-chart></sankey-chart>
        
        <h2>Hierarchical Treemap</h2>
        <hierarchical-treemap></hierarchical-treemap>
        
        <h2>Table with Sparklines</h2>
        <table-with-sparklines></table-with-sparklines>

        <!-- <h2>Treemap - default</h2>
        <treemap :series='@json($series3)'></treemap>
        
        <h2>Treemap - squarified</h2>
        <treemap algorithm="squarified" :series='@json($series3)'></treemap>
         -->
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