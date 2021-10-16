<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section 03</title>
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
</head>
<body>
@php
    
    $data31 = [
             ['label' => '', 'color' => '#217ca3', 'values' => [2.75, 2.65, 2.76, 2.76, 2.76]],
    ];

    $series31 = [
        'title' => 'Average High School GPA',
        'subtitle' => 'of First-time, Full-time Freshman',
        'y_axis_max' => 4.0,
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data31,
    ];

    @endphp

<div id="app">

    <h2>Figure 31 - Average High School GPA of First-time, Full-time Freshman</h2>
    <column-chart2 
        :series='@json($series31)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart2>

    @php
    
    $data32 = [
             ['label' => '3.0 and above', 'color' => '#217ca3', 'values' => [35.2, 33.0, 35.6, 35.6, 35.6]],
             ['label' => '2.5 to 2.99', 'color' => '#8d230f', 'values' => [26.4, 25.2, 29.7, 29.7, 29.7]],
             ['label' => '2.0 to 2.49', 'color' => '#50CB93', 'values' => [28.6, 20.4, 17.8, 17.8, 17.8]],
             ['label' => 'Less than 2.0', 'color' => 'purple', 'values' => [9.9, 21.4, 16.9, 16.9, 16.9]],
    ];

    $series32 = [
        'title' => "Percent of First-time, Full-time, Freshman",
        'subtitle' => "by HS GPA Ranges",
        'x_axis' => '',
        'y_axis' => '',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data32,
    ];

    @endphp

    <h2>Figure 32 - Percent of First-time, Full-time Freshman by HS GPA Ranges</h2>
    <stacked-percentage-column-chart 
        :series='@json($series32)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-percentage-column-chart>
    
    @php
    
    $data33 = [
             ['label' => 'MATH 103', 'color' => '#217ca3', 'values' => [255, 297, 285, 285, 222]],
             ['label' => 'MATH 097', 'color' => '#8d230f', 'values' => [225, 171, 180, 198, 135]],
             ['label' => 'MATH 095', 'color' => '#50CB93', 'values' => [78, 93, 105, 141, 99]],
             ['label' => 'GENL 095', 'color' => 'purple', 'values' => [16, 31, 0, 0, 0]],
             ['label' => '(EWPC)/EMCO 096', 'color' => 'lightblue', 'values' => [111, 213, 240, 204, 93]],
    ];

    $length33 = count($data33);
    $total33 = [];

    for ($i = 0; $i < 5; $i++) {
        $sum = 0;
        for ($j = 0; $j < $length33; $j++) {
            $sum += $data33[$j]['values'][$i];
        }
        array_push($total33, $sum);
    }

    $labels33 = [];
    $numbers33 = [];

    for ($j = 0; $j < $length33; $j++) {
        array_push($labels33, $data33[$j]['label']);
        array_push($numbers33, $data33[$j]['values']);
    }
    array_push($labels33, 'Grand Total');
    array_push($numbers33, $total33);

    $series33 = [
        'title' => 'Credit Hours in',
        'subtitle' => 'Developmental Courses',
        'categories' => ['2017-2018', '2018-2019', '2019-2020', '2020-2021', '2021-2022'],
        'data' => $data33,
    ];

    @endphp

    <h2>Figure 33 - Credit Hours in Developmental Courses</h2>
    <stacked-column-chart 
        :series='@json($series33)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-column-chart>

    @php
    
    $data34 = [
             ['label' => 'Cr Hrs in Dev', 'color' => '#217ca3', 'values' => [685, 805, 810, 816, 549]],
             ['label' => 'Cr Hrs in TRAD (Non-Dev)', 'color' => '#8d230f', 'values' => [11780, 9950, 10578, 10777, 7419]],
    ];

    $length34 = count($data34);
    $total34 = [];

    for ($i = 0; $i < 5; $i++) {
        $sum = 0;
        for ($j = 0; $j < $length34; $j++) {
            $sum += $data34[$j]['values'][$i];
        }
        array_push($total34, $sum);
    }

    $labels34 = [];
    $numbers34 = [];

    for ($j = 0; $j < $length34; $j++) {
        array_push($labels34, $data34[$j]['label']);
        array_push($numbers34, $data34[$j]['values']);
    }
    array_push($labels34, 'Grand Total');
    array_push($numbers34, $total34);

    $series34 = [
        'title' => 'Credit Hours in Developmental Courses vs Credit Hours in TRAD (Non-Dev) Courses',
        'subtitle' => '',
        'categories' => ['2017-2018', '2018-2019', '2019-2020', '2020-2021', '2021-2022'],
        'data' => $data34,
    ];

    @endphp

    <h2>Figure 34 - Credit Hours in Developmental Courses vs Credit Hours in TRAD (NON-DEV) Courses</h2>
    <stacked-column-chart 
        :series='@json($series34)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-column-chart>


    @php
    
    $data35 = [
             ['label' => 'Full-time Instructor', 'color' => '#217ca3', 'values' => [49.8, 55.1, 45.0, 45.4, 46.6]],
             ['label' => 'Adjunct Instructor', 'color' => '#8d230f', 'values' => [50.2, 44.9, 55.0, 54.6, 53.4]],
    ];

    $series35 = [
        'title' => "Percentage Credit Hours Taught",
        'subtitle' => "by Full-Time vs. Adjunct Faculty",
        'x_axis' => '',
        'y_axis_visible' => false,
        'y_axis' => 'Percentage (%)',
        'y_axis_max' => 100,
        'categories' => ['2017-2018', '2018-2019', '2019-2020', '2020-2021', '2021-2022'],
        'data' => $data35,
    ];

    @endphp

    <h2>Figure 35 - Percentage Credit Hours Taught by Full-Time vs. Adjunct Faculty</h2>
    <!-- <stacked-percentage-column-chart 
        :series='@json($series35)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-percentage-column-chart> -->
    
    <column-chart-for-percentages2 
        :series='@json($series35)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart-for-percentages2>
    
    @php
    
    $data36 = [
             ['label' => 'Full-time Instructor', 'color' => '#217ca3', 'values' => [60.0, 73.0, 53.9, 50.7, 49.6]],
             ['label' => 'Adjunct Instructor', 'color' => '#8d230f', 'values' => [40.0, 27.0, 46.1, 49.3, 50.4]],
    ];

    $series36 = [
        'title' => "Percentage General Education Credit Hours Taught",
        'subtitle' => "by Full-Time vs. Adjunct Faculty",
        'x_axis' => '',
        'y_axis_visible' => false,
        'y_axis' => 'Percentage (%)',
        'y_axis_max' => 100,
        'categories' => ['2017-2018', '2018-2019', '2019-2020', '2020-2021', '2021-2022'],
        'data' => $data36,
    ];

    @endphp

    <h2>Figure 36 - Percentage General Education Credit Hours Taught by Full-Time vs. Adjunct Faculty</h2>
    <!-- <stacked-percentage-column-chart 
        :series='@json($series35)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-percentage-column-chart> -->
    
    <column-chart-for-percentages2 
        :series='@json($series36)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart-for-percentages2>
    

    @php
    
    $data37 = [
             ['label' => 'Traditional Undergraduate', 'color' => '#217ca3', 'values' => [12465, 10755, 11388, 11593, 7968]],
             ['label' => 'Traditional-Intersession', 'color' => '#8d230f', 'values' => [63, 39, 39, 195, 0]],
             ['label' => 'Degree Completion', 'color' => '#50CB93', 'values' => [2652, 2457, 2349, 2226, 870]],
             ['label' => 'Graduate', 'color' => 'purple', 'values' => [3783, 3145, 2689, 2576, 636]],
    ];
    $length37 = count($data37);
    $total37 = [];

    for ($i = 0; $i < 5; $i++)
    {
        $total37[] = $data37[0]['values'][$i] + $data37[1]['values'][$i] + $data37[2]['values'][$i] + $data37[3]['values'][$i]; 
    }

    $labels37 = ['Total', $data37[0]['label'], $data37[1]['label'], $data37[2]['label'], $data37[3]['label']];
    $numbers37 = [$total37, $data37[0]['values'], $data37[1]['values'], $data37[2]['values'], $data37[3]['values']];

   $series37 = [
        'title' => 'Credit Hour Production',
        'categories' => ['2017-2018', '2018-2019', '2019-2020', '2020-2021', '2021-2022'],
        'data' => $data37,
    ];

    
    @endphp

    <div id="app">
        <h2>Figure 37 - Credit Hour Production</h2>
        <stacked-column-with-data-label-percents-chart 
            :series='@json($series37)'
            :chart-width="1200"
            :chart-height="400">
        </stacked-column-with-data-label-percents-chart>

        <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series37['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length37+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels37[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ number_format($numbers37[$j][$i]) }}</td>
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