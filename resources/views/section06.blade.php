<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section 06</title>
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
</head>
<body>
@php
    
    $data39 = [
             ['label' => '', 'color' => '#217ca3', 'values' => [220, 121, 153, 173, 173]],
    ];

    $series39 = [
        'title' => 'Credit Hours Produced',
        'subtitle' => 'Per Full-time and Part-time Permanent Positions',
        'categories' => ['2016-2017', '2017-2018', '2018-2019', '2019-2020', '2020-2021'],
        'data' => $data39,
    ];

    @endphp

<div id="app">

    <h2>Figure 39 - Credit Hours Produced Per Full-time and Part-time Permanent Positions</h2>
    <column-chart 
        :series='@json($series39)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart>

    @php
    
    $data40 = [
             ['label' => '', 'color' => '#217ca3', 'values' => [4132707, 4279589, 4411153, 4474425]],
    ];

    $series40 = [
        'title' => 'Endowment (at the end of the FY)',
        'subtitle' => '',
        'categories' => ['FY 2016-17', 'FY 2017-18', 'FY 2018-19', 'FY 2019-20', 'FY 2020-21'],
        'data' => $data40,
    ];

    @endphp

<div id="app">

    <h2>Figure 40 - Endowment (at the end of the FY)</h2>
    <column-chart 
        :series='@json($series40)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart>

</div>

    <script src="/js/app.js"></script>
</body>
</html>