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

<div id="app">

@php

// for figure 20   
// colors taken from Excel chart via rgb lookup.
// colors converted to hex using https://www.rgbtohex.net/
$data20 = [['label' => 'F1 to F2', 'color' => '#4f81bd', 'showDataLabels' => false,  'values' => [88.0, 73.7, 75.7, 68.5, 86.2]],
         ['label' => 'F1 to SO', 'color' => '#be4a48', 'showDataLabels' => false, 'values' => [54.0, 45.8, 56.3, 41.8, 56.9]],
         ['label' => 'SO to JR', 'color' => '#92d050',  'showDataLabels' => false, 'values' => [61.0, 77.2, 72.1, 75.3, 63.3]],
         ['label' => 'JR to SR', 'color' => '#7030a0', 'showDataLabels' => false, 'values' => [75.0, 76.8, 84.0, 80.0, 83.8]],
];

    $length20 = count($data20);
    
    $labels20 = [$data20[0]['label'], $data20[1]['label'], $data20[2]['label'], $data20[3]['label']];
    $numbers20 = [$data20[0]['values'], $data20[1]['values'], $data20[2]['values'], $data20[3]['values']];

    $f1_f2_avg = array_sum($data20[0]['values'])/5.0;
    $f1_so_avg = array_sum($data20[1]['values'])/5.0;
    $so_jr_avg = array_sum($data20[2]['values'])/5.0;
    $jr_sr_avg = array_sum($data20[3]['values'])/5.0;

    echo $f1_f2_avg . "\n";
    echo $f1_so_avg . "\n";
    echo $so_jr_avg . "\n";
    echo $jr_sr_avg . "\n";

$series20 = [
    'title' => 'Retention Rates',
    'subtitle' => '(Full-time Traditional)',
    'y_axis_min' => 40,
    'y_axis_max' => 100,
    'y_axis_tickinterval' => 10,
    'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
    'data' => $data20,
];
@endphp

        <h2>Figure 20 - Historical Retention Rates of Full-time Traditional Students</h2>
        <line-chart2 
            v-bind:series='@json($series20)'
            v-bind:chart-width="1200"
            v-bind:chart-height="600">
        </line-chart2>

        <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series20['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length20; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels20[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ number_format($numbers20[$j][$i], 1) }}%</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>

    
    <h2>Figure 21 - 5-Year Average Retention Rates with Retention Goals</h2>
    <combo-chart
        :chart-width="1200"
        :chart-height="600">
    </combo-chart>

@php
    
    $data29 = [
             ['label' => 'Full-time', 'color' => '#217ca3', 'values' => [88.4, 75.7, 75.8, 70.2, 90.2]],
             ['label' => 'Part-time', 'color' => '#8d230f', 'values' => [50.0, 0.0, 66.7, 12.5, 33.3]],
    ];

    $series29 = [
        'title' => "Fall-to-Spring",
        'subtitle' => "Retention of First-time, First-semester TRAD Freshman (F1)",
        'x_axis' => '',
        'y_axis' => 'Percentage (%)',
        'categories' => ['Fall 2017-Spring 2018', 'Fall 2018-Spring 2019', 
                         'Fall 2019-Spring 2020', 'Fall 2020-Spring 2021', 'Fall 2021-Spring 2022'],
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
             ['label' => 'Full-time', 'color' => '#217ca3', 'values' => [53.7, 48.5, 57.6, 42.7, 58.8]],
             ['label' => 'Part-time', 'color' => '#8d230f', 'values' => [0.0, 0.0, 0.0, 25.0, 33.3]],
    ];

    $series30 = [
        'title' => "Fall-to-Fall",
        'subtitle' => "Retention of First-time, First-semester TRAD Freshman (F1)",
        'x_axis' => '',
        'y_axis' => 'Percentage (%)',
        'y_axis_max' => 100,
        'categories' => ['Fall 2017-Fall 2018', 'Fall 2018-Fall 2019', 
                         'Fall 2019-Fall 2020', 'Fall 2020-Fall 2021', 'Fall 2021-Fall 2022'],
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