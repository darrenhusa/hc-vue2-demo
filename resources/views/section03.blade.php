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
             ['label' => '', 'color' => '#217ca3', 'values' => [2.66, 2.76, 2.66, 2.74, 2.61]],
    ];

    $series31 = [
        'title' => 'Average High School GPA',
        'subtitle' => 'of First-time, Full-time Freshman',
        'y_axis_max' => 4.0,
        'categories' => ['Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021', 'Fall 2022'],
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
             ['label' => '3.0 and above', 'color' => '#217ca3', 'values' => [17.4, 21.0, 21.0, 19.5, 21.0]],
             ['label' => '2.5 to 2.99', 'color' => '#8d230f', 'values' => [20.3, 26.6, 18.0, 15.6, 19.5]],
             ['label' => '2.0 to 2.49', 'color' => '#50CB93', 'values' => [16.3, 16.3, 29.5, 14.0, 24.0]],
             ['label' => 'Less than 2.0', 'color' => 'purple', 'values' => [18.9, 18.0, 23.4, 14.4, 25.2]],
    ];

    $series32 = [
        'title' => "Percent of First-time, Full-time, Freshman",
        'subtitle' => "by HS GPA Ranges",
        'x_axis' => '',
        'y_axis' => '',
        'categories' => ['Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021', 'Fall 2022'],
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
             ['label' => 'MATH 103', 'color' => '#217ca3', 'values' => [297, 285, 285, 345, 225]],
             ['label' => 'MATH 097', 'color' => '#8d230f', 'values' => [171, 180, 198, 213, 207]],
             ['label' => 'MATH 095', 'color' => '#50CB93', 'values' => [93, 105, 141, 153, 144]],
             ['label' => 'GENL 095', 'color' => 'purple', 'values' => [31, 0, 0, 0, 0]],
             ['label' => '(EWPC)/EMCO 096', 'color' => 'lightblue', 'values' => [213, 240, 204, 90, 87]],
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
        'categories' => ['2018-2019', '2019-2020', '2020-2021', '2021-2022', '2022-2023'],
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
             ['label' => 'Cr Hrs in Dev', 'color' => '#217ca3', 'values' => [805, 810, 816, 801, 663]],
             ['label' => 'Cr Hrs in TRAD (Non-Dev)', 'color' => '#8d230f', 'values' => [9950, 10578, 10777, 10088, 6471]],
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

    $total34 = [];

    //calculate percentages for html table
    for ($i = 0; $i < 5; $i++)
    {
        $total34[] = $data34[0]['values'][$i] + $data34[1]['values'][$i]; 
    }
    
    for ($i = 0; $i < 5; $i++)
    {   $num1 = round(100.0 * $data34[0]['values'][$i]/$total34[$i], 0);
        $num2 = round(100.0 * $data34[1]['values'][$i]/$total34[$i], 0);
        $percents34[] = [100, $num1, $num2]; 
    }

    $labels34 = ['Total', $data34[0]['label'], $data34[1]['label']];
    $numbers34 = [$total34, $data34[0]['values'], $data34[1]['values']];


    $series34 = [
        'title' => 'Credit Hours in Developmental Courses vs Credit Hours in TRAD (Non-Dev) Courses',
        'subtitle' => '',
        'categories' => ['2018-2019', '2019-2020', '2020-2021', '2021-2022', '2022-2023'],
        'data' => $data34,
    ];

    @endphp

    <h2>Figure 34 - Credit Hours in Developmental Courses vs Credit Hours in TRAD (NON-DEV) Courses</h2>
    <p>TODO - Add HTML table to display numbers and percentages????</p>
    <stacked-column-chart 
        :series='@json($series34)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-column-chart>

    <div style="padding-top: 25px; padding-bottom: 25px; margin: 0px 0px 0px 0px;">
        <table style="border-collapse: collapse;">
            <thead style="border-top: 2px solid gray; border-bottom: 2px solid gray;">
                <tr>
                    <th style="padding-right: 25px;"></th>                    
                    @for ($i = 0; $i < 5; $i++)
                        <th style="text-align: center; padding-right: 125px;">{{ $series34['categories'][$i] }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($j = 0; $j < $length34+1; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels34[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ number_format($numbers34[$j][$i]) }} ({{$percents34[$i][$j] }}%)</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>


    <stacked-column-with-data-label-percents-chart 

        :series='@json($series34)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-column-with-data-label-percents-chart>



    @php
    
    $data35 = [
             ['label' => 'Full-time Instructor', 'color' => '#217ca3', 'values' => [55.1, 45.0, 45.4, 46.1, 45.2]],
             ['label' => 'Adjunct Instructor', 'color' => '#8d230f', 'values' => [44.9, 55.0, 54.6, 53.9, 54.8]],
    ];

    $series35 = [
        'title' => "Percentage Credit Hours Taught",
        'subtitle' => "by Full-Time vs. Adjunct Faculty",
        'x_axis' => '',
        'y_axis_visible' => false,
        'y_axis' => 'Percentage (%)',
        'y_axis_max' => 100,
        'categories' => ['2018-2019', '2019-2020', '2020-2021', '2021-2022', '2022-2023'],
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
             ['label' => 'Full-time Instructor', 'color' => '#217ca3', 'values' => [73.0, 53.9, 50.7, 49.0, 42.5]],
             ['label' => 'Adjunct Instructor', 'color' => '#8d230f', 'values' => [27.0, 46.1, 49.3, 51.0, 57.5]],
    ];

    $series36 = [
        'title' => "Percentage General Education Credit Hours Taught",
        'subtitle' => "by Full-Time vs. Adjunct Faculty",
        'x_axis' => '',
        'y_axis_visible' => false,
        'y_axis' => 'Percentage (%)',
        'y_axis_max' => 100,
        'categories' => ['2018-2019', '2019-2020', '2020-2021', '2021-2022', '2022-2023'],
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
             ['label' => 'Traditional Undergraduate', 'color' => '#217ca3', 'values' => [10755, 11388, 11593, 10889, 7134]],
             ['label' => 'Traditional-Intersession', 'color' => '#8d230f', 'values' => [39, 39, 195, 129, 9]],
             ['label' => 'Degree Completion', 'color' => '#50CB93', 'values' => [2457, 2349, 2226, 2169, 834]],
             ['label' => 'Graduate', 'color' => 'purple', 'values' => [3145, 2689, 2576, 1833, 760]],
    ];
    $length37 = count($data37);
    $total37 = [];

    //calculate percentages for html table
    for ($i = 0; $i < 5; $i++)
    {
        $total37[] = $data37[0]['values'][$i] + $data37[1]['values'][$i] + $data37[2]['values'][$i] + $data37[3]['values'][$i]; 
    }
    
    for ($i = 0; $i < 5; $i++)
    {   $num1 = round(100.0 * $data37[0]['values'][$i]/$total37[$i], 0);
        $num2 = round(100.0 * $data37[1]['values'][$i]/$total37[$i], 0);
        $num3 = round(100.0 * $data37[2]['values'][$i]/$total37[$i], 0);
        $num4 = round(100.0 * $data37[3]['values'][$i]/$total37[$i], 0);
        $percents37[] = [100, $num1, $num2, $num3, $num4]; 
    }

    $labels37 = ['Total', $data37[0]['label'], $data37[1]['label'], $data37[2]['label'], $data37[3]['label']];
    $numbers37 = [$total37, $data37[0]['values'], $data37[1]['values'], $data37[2]['values'], $data37[3]['values']];

   $series37 = [
        'title' => 'Credit Hour Production',
        'categories' => ['2018-2019', '2019-2020', '2020-2021', '2021-2022', '2022-2023'],
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
                            <td style="text-align: center; padding-right: 100px;">{{ number_format($numbers37[$j][$i]) }} ({{$percents37[$i][$j] }}%)</td>
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