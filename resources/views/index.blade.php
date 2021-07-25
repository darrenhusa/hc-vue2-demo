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
        
        <h2>Line</h2>
        <line-chart title="Line Chart - Constant" :values="[5, 5, 5]"></line-chart>

        <h2>Stacked Percentage Column</h2>
        <stacked-percentage-column-chart></stacked-percentage-column-chart>
        
        <h2>Stacked Column</h2>
        <stacked-column-chart></stacked-column-chart>
        
        <h2>Pie</h2>
        <pie-chart></pie-chart>
        
        <h2>Column</h2>
        <column-chart></column-chart>
        
        <h2>Combo</h2>
        <combo-chart></combo-chart>

        <h2>More Lines</h2>
        <line-chart title="Line Chart 1" :values="[3, 2, 1]"></line-chart>
        
        <line-chart :values="[10, 15, 5]"></line-chart>
        
        
        <!-- <chart-demo title="My Title"
                    :values="[10, 0, 8, 2, 6, 4, 5, 5]">
        </chart-demo> -->
        <!-- <highcharts :options="chartOptions"></highcharts> -->
    </div>
    <script src="/js/app.js"></script>
</body>
</html>