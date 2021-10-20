<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section 01</title>
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
</head>
<body>
        
    <div id="app">
    @php

// for figure 01   
$data1 = [['label' => 'DCP', 'color' => '#add8e6', 'showDataLabels' => false,  'values' => [142,	114, 155, 150, 141,	143, 165, 189, 306, 343, 339, 377, 464, 483, 443, 392, 359, 365, 343, 337, 326, 265, 324, 279, 253, 249, 149, 141, 127, 133, 127]],
         ['label' => 'GRAD', 'color' => 'orange', 'showDataLabels' => false, 'values' => ['', '', '', '', '', '', '', '', '', '', '', 115, 171, 149, 129,	196, 216, 157, 194,	184, 170, 164, 152,	169, 220, 256, 214, 190, 169, 138, 106]],
         ['label' => 'TRAD - FT', 'color' => 'grey',  'showDataLabels' => true, 'values' => [377, 391, 350,	357, 313, 286, 327,	319, 300, 267, 313, 326, 383, 405, 435, 435, 448, 493, 565, 543, 493, 475, 528, 496, 497, 443, 403, 353, 384, 409, 370]],
         ['label' => 'TRAD - PT', 'color' => 'yellow', 'showDataLabels' => false, 'values' => [587,	591, 598, 618, 578,	559, 497, 468, 397,	365, 353, 323, 312,	301, 255, 248, 218,	199, 210, 187, 153,	129, 132, 85, 72, 46, 37, 31, 29, 23, 25]],
         ['label' => 'Grand Total', 'color' => 'blue', 'showDataLabels' => true, 'values' => [1106,	1096, 1103, 1125, 1032, 988, 989, 976, 1003, 975, 1005, 1141, 1330, 1338, 1262,	1271, 1241,	1214, 1312,	1251, 1142,	1033, 1136,	1029, 1042,	994, 803, 715, 709, 703, 628]],
];

$series1 = [
    'title' => 'Historical CCSJ Headcounts (Fall 1991 to Fall 2021)',
    'subtitle' => '',
    'y_axis' => '',
    'categories' => [19911,	19921,	19931,	19941,	19951,	19961,	19971,	19981, 19991,	20001,	20011,	20021,	20031,	20041,	20051,	20061,	20071,	20081,	20091,	20101,	20111,	20121,	20131,	20141,	20151,	20161,	20171,	20181,	20191,	20201,	20211],
    'data' => $data1,
];
@endphp

        <h2>Figure 01 - Historical CCSJ Headcounts (Fall 1991 to Fall 2021)</h2>
        <basic-line-chart 
            v-bind:series='@json($series1)'
            v-bind:chart-width="1200"
            v-bind:chart-height="400">
        </basic-line-chart>

        @php
    
    $data3 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [16, 271, 268, 258, 211]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [748, 640, 883, 1394, 374]]
    ];
    $length3 = count($data3);
    $total3 = [];

    for ($i = 0; $i < 5; $i++)
    {
        $total3[] = $data3[0]['values'][$i] + $data3[1]['values'][$i]; 
    }

    $labels3 = ['Total', $data3[0]['label'], $data3[1]['label']];
    $numbers3 = [$total3, $data3[0]['values'], $data3[1]['values']];

   $series3 = [
        'title' => 'Number of Applications - TRAD Programs',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data3,
    ];

    @endphp


        <h2>Figure 3 - TRAD Applications by Athletic Status</h2>
        <stacked-column-with-data-label-percents-chart 
            :series='@json($series3)'
            :chart-width="1200"
            :chart-height="400">
        </stacked-column-with-data-label-percents-chart>

        <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series3['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length3+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels3[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ number_format($numbers3[$j][$i]) }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>
    @php
    
    $data4 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [10, 147, 205, 197, 165]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [303, 208, 395, 727, 171]]
    ];
    $length4 = count($data4);

    for ($i = 0; $i < 5; $i++)
    {
        $total4[] = $data4[0]['values'][$i] + $data4[1]['values'][$i]; 
    }

    $labels4 = ['Total', $data4[0]['label'], $data4[1]['label']];
    $numbers4 = [$total4, $data4[0]['values'], $data4[1]['values']];

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
    
    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series4['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length4+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels4[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers4[$j][$i] }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>

    @php
    
    $data5 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [6, 119, 132, 148, 129]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [239, 100, 158, 303, 96]]
    ];

    $length5 = count($data5);

    for ($i = 0; $i < 5; $i++)
    {
        $total5[] = $data5[0]['values'][$i] + $data5[1]['values'][$i]; 
    }

    $labels5 = ['Total', $data5[0]['label'], $data5[1]['label']];
    $numbers5 = [$total5, $data5[0]['values'], $data5[1]['values']];

    $series5 = [
        'title' => 'Number of Admitted (Final Accepted) - TRAD Programs',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data5,
    ];

    @endphp

    <h2>Figure 5 - TRAD Admitted by Athletic Status</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series5)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>
    
    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series5['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length5+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels5[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers5[$j][$i] }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>

    @php
    
    $data6 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [4, 110, 113, 116, 109]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [186, 78, 125, 131, 69]]
    ];

    $length6 = count($data6);

    for ($i = 0; $i < 5; $i++)
    {
        $total6[] = $data6[0]['values'][$i] + $data6[1]['values'][$i]; 
    }

    $labels6 = ['Total', $data6[0]['label'], $data6[1]['label']];
    $numbers6 = [$total6, $data6[0]['values'], $data6[1]['values']];

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

    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series6['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length6+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels6[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers6[$j][$i] }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>

    @php
    
    $data7 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [2, 103, 107, 108, 105]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [159, 63, 90, 86, 58]]
    ];

    $length7 = count($data7);

    for ($i = 0; $i < 5; $i++)
    {
        $total7[] = $data7[0]['values'][$i] + $data7[1]['values'][$i]; 
    }

    $labels7 = ['Total', $data7[0]['label'], $data7[1]['label']];
    $numbers7 = [$total7, $data7[0]['values'], $data7[1]['values']];

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
       
    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series7['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length7+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels7[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers7[$j][$i] }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>


@php
    
    $data8 = [
             ['label' => 'first-time', 'color' => '#217ca3', 'values' => [4, 8, 31, 11, 9, 0, 3, 0, 2, 20, 3, 1, 9, 0, 1, 0, 5]],
             ['label' => 'continuing', 'color' => '#8d230f', 'values' => [12, 15, 49, 39, 12, 19, 9, 1, 2, 15, 4, 14, 20, 0, 0, 1, 28]],
             ['label' => 'transfer', 'color' => '#50CB93', 'values' => [0, 0, 16, 9, 4, 0, 0, 0, 0, 7, 1, 4, 4, 1, 0, 0, 2]]
    ];

    $programs8 = ['Acct', 'Biomed', 'Bmt', 'CriJ', 'DSA', 'Educ', 'Emco', 'FrnsBio', 'FrnsSci', 'GenStud', 'HlthSci', 'HSv', 'Kines', 'LifSci', 'MedLabSci', 'NonDegree', 'Psyc'];

    $series8 = [
        'title' => "Fall 2021 TRAD Enrollment",
        'subtitle' => "by Program and by Entry-type",
        'x_axis' => 'Programs',
        'y_axis' => 'Headcount - Full-time and Part-time',
        'y_axis_max' => 100,
        'categories' => $programs8,
        'data' => $data8,
    ];

    @endphp

    <h2>Figure 8 - Fall 2021 TRAD Enrolled by Program and by Entry-type (numbers)</h2>
    <stacked-column-chart2 
        :series='@json($series8)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-column-chart2>
       
    @php
    
    $data9 = [
             ['label' => 'first-time', 'color' => '#217ca3', 'values' => [4, 8, 31, 11, 9, 0, 3, 0, 2, 20, 3, 1, 9, 0, 1, 0, 5]],
             ['label' => 'continuing', 'color' => '#8d230f', 'values' => [12, 15, 49, 39, 12, 19, 9, 1, 2, 15, 4, 14, 20, 0, 0, 1, 28]],
             ['label' => 'transfer', 'color' => '#50CB93', 'values' => [0, 0, 16, 9, 4, 0, 0, 0, 0, 7, 1, 4, 4, 1, 0, 0, 2]]
    ];

    $programs9 = ['Acct', 'Biomed', 'Bmt', 'CriJ', 'DSA', 'Educ', 'Emco', 'FrnsBio', 'FrnsSci', 'GenStud', 'HlthSci', 'HSv', 'Kines', 'LifSci', 'MedLabSci', 'NonDegree', 'Psyc'];

    $series9 = [
        'title' => "Fall 2021 TRAD Enrollment",
        'subtitle' => "by Program and by Entry-type",
        'x_axis' => 'Programs',
        'y_axis' => 'Percentages',
        'y_axis_max' => 100,
        'categories' => $programs9,
        'data' => $data9,
    ];

    @endphp

    <h2>Figure 9 - Fall 2021 TRAD Enrolled by Program and by Entry-type (percentage)</h2>
    <stacked-percentage-column-chart2 
        :series='@json($series9)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-percentage-column-chart2>
    
    @php
    
    $data10 = [
             ['label' => '', 'color' => '#217ca3', 'values' => [36, 31, 30, 24, 25]],
    ];

    $series10 = [
        'title' => 'TRAD Programs - Part-time Students',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'y_axis_visible' => false,
        'data' => $data10,
    ];

    @endphp

    <h2>Figure 10 - TRAD Programs - Number of Part-time Students</h2>
    <column-chart2 
        :series='@json($series10)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart2>

    @php
    
    $data12 = [
             ['label' => 'continuing', 'color' => '#217ca3', 'values' => [278, 224, 226, 263, 240]],
             ['label' => 'first-time', 'color' => '#8d230f', 'values' => [99, 106, 135, 141, 107]],
             ['label' => 'new-2nd-degree', 'color' => '#50CB93', 'values' => [1, 0, 0, 0, 0]],
             ['label' => 'returning', 'color' => 'purple', 'values' => [1, 2, 0, 0, 0]],
             ['label' => 'transfer', 'color' => 'lightblue', 'values' => [60, 52, 53, 29, 48]],
    ];
    $length12 = count($data12);
    $total12 = [];

    for ($i = 0; $i < 5; $i++) {
        $sum = 0;
        for ($j = 0; $j < $length12; $j++) {
            $sum += $data12[$j]['values'][$i];
        }
        array_push($total12, $sum);
    }

    $labels12 = [];
    $numbers12 = [];

    for ($j = 0; $j < $length12; $j++) {
        array_push($labels12, $data12[$j]['label']);
        array_push($numbers12, $data12[$j]['values']);
    }
    array_push($labels12, 'Grand Total');
    array_push($numbers12, $total12);

    $series12 = [
        'title' => 'TRAD Programs - By Entry Type',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data12,
    ];

    @endphp

    <h2>Figure 12 - Traditional Programs - By Entry-type (numbers and percentages)</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series12)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>
       
    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series12['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length12+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels12[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers12[$j][$i] }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>

    @php
    
    $data13 = [
             ['label' => '0', 'color' => '#217ca3', 'values' => [4, 1, 4, 1, 2]],
             ['label' => '1-15', 'color' => '#8d230f', 'values' => [8, 9, 7, 7, 2]],
             ['label' => '16-30', 'color' => '#50CB93', 'values' => [5, 9, 7, 9, 7]],
             ['label' => '31-60', 'color' => 'purple', 'values' => [14, 21, 24, 6, 13]],
             ['label' => '61-90', 'color' => 'lightblue', 'values' => [21, 11, 9, 6, 17]],
             ['label' => '91 and above', 'color' => 'orange', 'values' => [8, 1, 2, 0, 7]],
    ];

    $length13 = count($data13);
    $total13 = [];

    for ($i = 0; $i < 5; $i++) {
        $sum = 0;
        for ($j = 0; $j < $length13; $j++) {
            $sum += $data13[$j]['values'][$i];
        }
        array_push($total13, $sum);
    }

    //calculate percentages for html table
    for ($i = 0; $i < 5; $i++)
    {
        $total13[] = $data13[0]['values'][$i] + $data13[1]['values'][$i] + $data13[2]['values'][$i] + $data13[3]['values'][$i] + $data13[4]['values'][$i] + $data13[5]['values'][$i]; 
    }
    for ($i = 0; $i < 5; $i++)
    {   $num1 = round(100.0 * $data13[0]['values'][$i]/$total13[$i], 0);
        $num2 = round(100.0 * $data13[1]['values'][$i]/$total13[$i], 0);
        $num3 = round(100.0 * $data13[2]['values'][$i]/$total13[$i], 0);
        $num4 = round(100.0 * $data13[3]['values'][$i]/$total13[$i], 0);
        $num5 = round(100.0 * $data13[4]['values'][$i]/$total13[$i], 0);
        $num6 = round(100.0 * $data13[5]['values'][$i]/$total13[$i], 0);
        $percents13[] = [$num1, $num2, $num3, $num4, $num5, $num6, 100]; 
    }

    $labels13 = [];
    $numbers13 = [];

    for ($j = 0; $j < $length13; $j++) {
        array_push($labels13, $data13[$j]['label']);
        array_push($numbers13, $data13[$j]['values']);
    }
    array_push($labels13, 'Grand Total');
    array_push($numbers13, $total13);

    $series13 = [
        'title' => 'TRAD Transfer Students - By Transfer Cr Hrs Earned Ranges',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data13,
    ];

    @endphp

    <h2>Figure 13 - TRAD Programs - Transfer Students by Transfer Credit Hours Earned Ranges</h2>
    <stacked-column-chart 
        :series='@json($series13)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-column-chart>

    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series13['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length13 + 1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels13[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers13[$j][$i] }} ({{$percents13[$i][$j] }}%)</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>
    
    @php
    
    $data14 = [
             ['label' => 'continuing', 'color' => '#217ca3', 'values' => [125, 107, 87, 88, 101]],
             ['label' => 'first-time', 'color' => '#8d230f', 'values' => [0, 0, 0, 1, 1]],
             ['label' => 'returning', 'color' => '#50CB93', 'values' => [1, 0, 1, 2, 0]],
             ['label' => 'transfer', 'color' => 'purple', 'values' => [23, 34, 42, 42, 26]],
    ];

    $length14 = count($data14);
    $total14 = [];

    for ($i = 0; $i < 5; $i++) {
        $sum = 0;
        for ($j = 0; $j < $length14; $j++) {
            $sum += $data14[$j]['values'][$i];
        }
        array_push($total14, $sum);
    }

    //calculate percentages for html table
    for ($i = 0; $i < 5; $i++)
    {
        $total14[] = $data14[0]['values'][$i] + $data14[1]['values'][$i] + $data14[2]['values'][$i] + $data14[3]['values'][$i]; 
    }
    for ($i = 0; $i < 5; $i++)
    {   $num1 = round(100.0 * $data14[0]['values'][$i]/$total14[$i], 0);
        $num2 = round(100.0 * $data14[1]['values'][$i]/$total14[$i], 0);
        $num3 = round(100.0 * $data14[2]['values'][$i]/$total14[$i], 0);
        $num4 = round(100.0 * $data14[3]['values'][$i]/$total14[$i], 0);
        $percents14[] = [$num1, $num2, $num3, $num4, 100]; 
    }

    $labels14 = [];
    $numbers14 = [];

    for ($j = 0; $j < $length14; $j++) {
        array_push($labels14, $data14[$j]['label']);
        array_push($numbers14, $data14[$j]['values']);
    }
    array_push($labels14, 'Grand Total');
    array_push($numbers14, $total14);

    $series14 = [
        'title' => 'DCP Programs - By Entry Type',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data14,
    ];

    @endphp

    <h2>Figure 14 - DCP Programs - By Entry-type (numbers and percentages)</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series14)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>
       
    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series14['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length14 + 1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels14[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers14[$j][$i] }} ({{$percents14[$i][$j] }}%)</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>
    
        @php
    
    $data15 = [
             ['label' => '0', 'color' => '#217ca3', 'values' => [0, 0, 0, 0, 0]],
             ['label' => '1-15', 'color' => '#8d230f', 'values' => [0, 0, 0, 0, 0]],
             ['label' => '16-30', 'color' => '#50CB93', 'values' => [0, 0, 1, 0, 0]],
             ['label' => '31-60', 'color' => 'purple', 'values' => [3, 1, 4, 6, 6]],
             ['label' => '61-90', 'color' => 'lightblue', 'values' => [10, 18, 24, 24, 14]],
             ['label' => '91 and above', 'color' => 'orange', 'values' => [10, 15, 13, 12, 6]],
    ];

    $length15 = count($data15);
    $total15 = [];

    for ($i = 0; $i < 5; $i++) {
        $sum = 0;
        for ($j = 0; $j < $length15; $j++) {
            $sum += $data15[$j]['values'][$i];
        }
        array_push($total15, $sum);
    }

    //calculate percentages for html table
    for ($i = 0; $i < 5; $i++)
    {
        $total15[] = $data15[0]['values'][$i] + $data15[1]['values'][$i] + $data15[2]['values'][$i] + $data15[3]['values'][$i] + $data15[4]['values'][$i] + $data15[5]['values'][$i]; 
    }
    for ($i = 0; $i < 5; $i++)
    {   $num1 = round(100.0 * $data15[0]['values'][$i]/$total15[$i], 0);
        $num2 = round(100.0 * $data15[1]['values'][$i]/$total15[$i], 0);
        $num3 = round(100.0 * $data15[2]['values'][$i]/$total15[$i], 0);
        $num4 = round(100.0 * $data15[3]['values'][$i]/$total15[$i], 0);
        $num5 = round(100.0 * $data15[4]['values'][$i]/$total15[$i], 0);
        $num6 = round(100.0 * $data15[5]['values'][$i]/$total15[$i], 0);
        $percents15[] = [$num1, $num2, $num3, $num4, $num5, $num6, 100]; 
    }

    $labels15 = [];
    $numbers15 = [];

    for ($j = 0; $j < $length15; $j++) {
        array_push($labels15, $data15[$j]['label']);
        array_push($numbers15, $data15[$j]['values']);
    }
    array_push($labels15, 'Grand Total');
    array_push($numbers15, $total15);

    $series15 = [
        'title' => 'DCP Transfer Students - By Transfer Cr Hrs Earned Ranges',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data15,
    ];

    @endphp

    <h2>Figure 15 - DCP Programs - Transfer Students by Transfer Credit Hours Earned Ranges</h2>
    <stacked-column-chart 
        :series='@json($series15)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-column-chart>

    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series15['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length15 + 1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels15[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers15[$j][$i] }} ({{$percents15[$i][$j] }}%)</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>
    
    @php
    
    $data16 = [
             ['label' => 'Catholic', 'color' => '#217ca3', 'values' => [45, 39, 42, 41, 41]],
             ['label' => 'Non-Catholic', 'color' => '#8d230f', 'values' => [55, 61, 58, 59, 59]],
    ];

    $series16 = [
        'title' => "Percent of Catholic Traditional Students",
        'subtitle' => "",
        'x_axis' => '',
        'y_axis_visible' => false,
        'y_axis' => 'Percentage (%)',
        'y_axis_max' => 100,
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data16,
    ];

    @endphp

    <h2>Figure 16 - Percentages of Catholic Traditional Students</h2>
    <stacked-percentage-column-chart 
        :series='@json($series16)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-percentage-column-chart>
    
    <column-chart-for-percentages2 
        :series='@json($series16)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart-for-percentages2>
    
    @php
    
    $data17 = [
             ['label' => 'Black or African American', 'color' => '#217ca3', 'values' => [38, 18, 57, 113]],
             ['label' => 'Hispanics of any race', 'color' => '#8d230f', 'values' => [38, 14, 95, 147]],
             ['label' => 'Other', 'color' => '#50CB93', 'values' => [5, 1, 12, 18]],
             ['label' => 'White', 'color' => 'purple', 'values' => [22, 13, 67, 102]],
    ];

    $length17 = count($data17);
    $total17 = [];

    for ($i = 0; $i < 4; $i++) {
        $sum = 0;
        for ($j = 0; $j < $length17; $j++) {
            $sum += $data17[$j]['values'][$i];
        }
        array_push($total17, $sum);
    }

    $labels17 = [];
    $numbers17 = [];

    for ($j = 0; $j < $length17; $j++) {
        array_push($labels17, $data17[$j]['label']);
        array_push($numbers17, $data17[$j]['values']);
    }
    array_push($labels17, 'Grand Total');
    array_push($numbers17, $total17);

    $series17 = [
        'title' => 'Demographic Distribution',
        'subtitle' => '(Fall 2021 Full-time Undergraduates)',
        'categories' => ['First-time Students', 'Transfer Students', 'Continuing Students', 'All FT Undergrads'],
        'data' => $data17,
    ];

    @endphp

    <h2>Figure 17 - Demographic Distribution (in %) - Fall 2021 Full-time Undergraduates</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series17)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>
       
    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 4; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series17['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length17+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels17[$j] }}</th>
                        @for ($i = 0; $i < 4; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers17[$j][$i] }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>

        @php
    
    $data18 = [
             ['label' => 'Black or African American', 'color' => '#217ca3', 'values' => [2, 4, 22, 28]],
             ['label' => 'Hispanics of any race', 'color' => '#8d230f', 'values' => [0, 10, 36, 46]],
             ['label' => 'Other', 'color' => '#50CB93', 'values' => [1, 2, 7, 10]],
             ['label' => 'White', 'color' => 'purple', 'values' => [2, 12, 45, 59]],
    ];

    $length18 = count($data18);
    $total18 = [];

    for ($i = 0; $i < 4; $i++) {
        $sum = 0;
        for ($j = 0; $j < $length18; $j++) {
            $sum += $data18[$j]['values'][$i];
        }
        array_push($total18, $sum);
    }

    $labels18 = [];
    $numbers18 = [];

    for ($j = 0; $j < $length18; $j++) {
        array_push($labels18, $data18[$j]['label']);
        array_push($numbers18, $data18[$j]['values']);
    }
    array_push($labels18, 'Grand Total');
    array_push($numbers18, $total18);

    $series18 = [
        'title' => 'Demographic Distribution',
        'subtitle' => '(Fall 2021 Part-time Undergraduates)',
        'categories' => ['First-time Students', 'Transfer Students', 'Continuing Students', 'All FT Undergrads'],
        'data' => $data18,
    ];

    @endphp

    <h2>Figure 18 - Demographic Distribution (in %) - Fall 2021 Part-time Undergraduates</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series18)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>
       
    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 4; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series18['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length18+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels18[$j] }}</th>
                        @for ($i = 0; $i < 4; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers18[$j][$i] }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>

        @php
    
    $data19 = [
             ['label' => 'Is First-Generation', 'color' => '#217ca3', 'values' => [31, 31, 43, 53, 28]],
             ['label' => 'Is Not First-Generation', 'color' => '#8d230f', 'values' => [55, 73, 82, 73, 65]],
             ['label' => 'Unknown', 'color' => '#50CB93', 'values' => [10, 0, 7, 7, 9]],
    ];

    $length19 = count($data19);
    $total19 = [];

    for ($i = 0; $i < 5; $i++) {
        $sum = 0;
        for ($j = 0; $j < $length19; $j++) {
            $sum += $data19[$j]['values'][$i];
        }
        array_push($total19, $sum);
    }

    //calculate percentages for html table
    for ($i = 0; $i < 5; $i++)
    {
        $total19[] = $data19[0]['values'][$i] + $data19[1]['values'][$i] + $data19[2]['values'][$i]; 
    }
    for ($i = 0; $i < 5; $i++)
    {   $num1 = round(100.0 * $data19[0]['values'][$i]/$total19[$i], 0);
        $num2 = round(100.0 * $data19[1]['values'][$i]/$total19[$i], 0);
        $num3 = round(100.0 * $data19[2]['values'][$i]/$total19[$i], 0);
        $percents19[] = [$num1, $num2, $num3, 100]; 
    }

    $labels19 = [];
    $numbers19 = [];

    for ($j = 0; $j < $length19; $j++) {
        array_push($labels19, $data19[$j]['label']);
        array_push($numbers19, $data19[$j]['values']);
    }
    array_push($labels19, 'Grand Total');
    array_push($numbers19, $total19);

    $series19 = [
        'title' => 'First-Generation Students',
        'subtitle' => 'of the First-time, Full-time, Freshman',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data19,
    ];

    @endphp

    <h2>Figure 19 - First-Generation Students of the First-time, Full-time, Freshman</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series19)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>
       
    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series19['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length19+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels19[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers19[$j][$i] }} ({{$percents19[$i][$j] }}%)</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>

</div>

    <script src="/js/app.js"></script>
</body>
</html>