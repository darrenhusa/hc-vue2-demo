<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highcharts Export Test Demo</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>
    <h1>Hello</h1>

    <div id="container" style="height: 300px; margin-top: 1em"></div>
    <button id="button">Export chart</button>            

<script>
const chart = Highcharts.chart('container', {
    title: {
        text: 'Exports a png with name: chart-name'
    },
    credits: {
        enabled: false
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    series: [{
        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
    }],
    navigation: {
        buttonOptions: {
            enabled: false
        }
    }
});

// the button handler
document.getElementById('button').addEventListener('click', () => {
    chart.exportChart({
        // default type is png.
        type: 'image/png',
        filename: 'chart-name'
    });
});

</script>
</body>
</html>