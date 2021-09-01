<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highcharts Vue 2 Wrapper Demo</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
</head>
<body>
   
    <div id="app">

        <h2>Behavioral & Social Sciences</h2>
        <h3>Fall 2020 to Spring 2021 to Fall 2021 TRAD Retention in Majors</h3>
        <div class="flex justify-between pt-4">
            <span>At Start of<br />Fall 2020</span>
            <span>At Start of<br />Spring 2021</span>
            <span>At Start of<br />Fall 2021</span>
        </div>
        <dept1-sankey-chart></dept1-sankey-chart>
        
    
    </div>
    <script src="/js/app.js"></script>
</body>
</html>