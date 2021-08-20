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

    for ($i = 0; $i < 5; $i++)
    {
        $total[] = $data3[0]['values'][$i] + $data3[1]['values'][$i]; 
    }

    $labels3 = ['Total', $data3[0]['label'], $data3[1]['label']];
    $numbers3 = [$total, $data3[0]['values'], $data3[1]['values']];

   $series3 = [
        'title' => 'Number of Applications - TRAD Programs',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data3,
    ];

    @endphp

    <div id="app">
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
                @for ($j = 0; $j < 3; $j++)
                    <tr style="border-bottom: 1px solid gray; height: 20px;">
                        <th style="font-weight: bold; text-align: left; padding-right: 125px; ">{{ $labels3[$j] }}</th>
                        @for ($i = 0; $i < 5; $i++)
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers3[$j][$i] }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>
    @php
    
    $data4 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [10, 147, 205, 180, 180]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [303, 208, 395, 722, 722]]
    ];

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
    
    @php
    
    $data5 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [6, 119, 132, 131, 131]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [239, 100, 158, 296, 296]]
    ];

    $series5 = [
        'title' => 'Number of Final Accepted - TRAD Programs',
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data5,
    ];

    @endphp

    <h2>Figure 5 - TRAD Final Accepted by Athletic Status</h2>
    <stacked-column-with-data-label-percents-chart 
        :series='@json($series5)'
        :chart-width="1200"
        :chart-height="400">
    </stacked-column-with-data-label-percents-chart>
    
    @php
    
    $data6 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [4, 110, 113, 96, 96]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [186, 78, 125, 125, 125]]
    ];

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

    @php
    
    $data7 = [
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [2, 103, 107, 90, 90]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [159, 63, 90, 81, 81]]
    ];

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
       
</div>

    <script src="/js/app.js"></script>
</body>
</html>