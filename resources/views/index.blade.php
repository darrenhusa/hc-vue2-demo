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
        
        <line-chart title="Line Chart - Constant" :values="[5, 5, 5]"></line-chart>

        <!-- Are the stacked charts supported in the wrapper?? -->
        <100%-stacked-column-chart></100%-stacked-column-chart>
        <stacked-column-chart></stacked-column-chart>
        
        <combo-chart></combo-chart>
        <pie-chart></pie-chart>
        <column-chart></column-chart>
        <line-chart title="Line Chart 1" :values="[3, 2, 1]"></line-chart>
        
        <line-chart :values="[10, 15, 5]"></line-chart>
        
        <chart-demo title="My Title"
                    :values="[10, 0, 8, 2, 6, 4, 5, 5]">
        </chart-demo>
        <!-- <highcharts :options="chartOptions"></highcharts> -->
    </div>
    <script src="/js/app.js"></script>
</body>
</html>