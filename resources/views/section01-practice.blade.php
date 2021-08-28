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
    @php
    
    $data3 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [16, 271, 268, 234, 234]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [748, 640, 883, 1392, 1392]]
    ];
    $length3 = count($data3);
    $total3 = [];

    for ($i = 0; $i < 5; $i++)
    {
        $total3[] = $data3[0]['values'][$i] + $data3[1]['values'][$i]; 
    }

    for ($i = 0; $i < 5; $i++)
    {   $num1 = round(100.0 * $data3[0]['values'][$i]/$total3[$i], 0);
        $num2 = round(100.0 * $data3[1]['values'][$i]/$total3[$i], 0);
        $percents3[] = [100, $num1, $num2]; 
    }

    $labels3 = ['Total', $data3[0]['label'], $data3[1]['label']];
    $numbers3 = [$total3, $data3[0]['values'], $data3[1]['values']];
    //$percents3 = [100, $percents3_temp['0'], $percents3_temp['1']];

    //$size_of_total3 = count($total3);
    //$size_of_numbers3 = count($numbers3);
    //$size_of_percents3 = count($percents3);

   $series3 = [
        'title' => 'Number of Applications - TRAD Programs',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data3,
    ];

    @endphp

    <div id="app">
        <ul>            
            <li>{{ print_r($total3) }}</li>
            <li>{{ print_r($percents3) }}</li>
        </ul>
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
                            <td style="text-align: center; padding-right: 100px;">{{ number_format($numbers3[$j][$i]) }} ({{ $percents3[$i][$j] }})%</td>
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