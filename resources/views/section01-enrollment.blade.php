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
                @for ($j = 0; $j < 3; $j++)
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
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [6, 119, 132, 131, 131]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [239, 100, 158, 296, 296]]
    ];

    for ($i = 0; $i < 5; $i++)
    {
        $total5[] = $data5[0]['values'][$i] + $data5[1]['values'][$i]; 
    }

    $labels5 = ['Total', $data5[0]['label'], $data5[1]['label']];
    $numbers5 = [$total5, $data5[0]['values'], $data5[1]['values']];

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
                @for ($j = 0; $j < 3; $j++)
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
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [4, 110, 113, 96, 96]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [186, 78, 125, 125, 125]]
    ];

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
                @for ($j = 0; $j < 3; $j++)
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
             ['label' => 'Athlete', 'color' => '#217ca3', 'values' => [2, 103, 107, 90, 90]],
             ['label' => 'NonAthlete', 'color' => '#8d230f', 'values' => [159, 63, 90, 81, 81]]
    ];

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
                @for ($j = 0; $j < 3; $j++)
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
             ['label' => 'first-time', 'color' => '#217ca3', 'values' => [3, 11, 15, 27, 18, 10, 9, 4, 1, 5, 16, 6, 5, 1, 9]],
             ['label' => 'continuing', 'color' => '#8d230f', 'values' => [11, 18, 17, 58, 50, 9, 29, 13, 3, 3, 16, 0, 18, 0, 18]],
             ['label' => 'transfer', 'color' => '#50CB93', 'values' => [1, 3, 1, 10, 7, 1, 0, 0, 0, 0, 2, 0, 0, 0, 4]]
    ];

    $programs8 = ['Acct', 'Bio/Kines', 'Biomed', 'Bmt', 'CriJ', 'DSA', 'Educ', 'Emco', 'FrnsBio', 'FrnsSci', 'GenStud', 'HlthSci', 'HSv', 'MedLabSci', 'Psyc'];

    $series8 = [
        'title' => "Fall 2021 TRAD Enrollment",
        'subtitle' => "by Program and by Entry-type",
        'x_axis' => 'Programs',
        'y_axis' => 'Headcount - Full-time and Part-time',
        'categories' => $programs8,
        'data' => $data8,
    ];

    @endphp

    <h2>Figure 8 - Fall 2021 TRAD Enrolled by Program and by Entry-type (numbers)</h2>
    <stacked-column-chart 
        :series='@json($series8)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-column-chart>
       
    @php
    
    $data9 = [
             ['label' => 'first-time', 'color' => '#217ca3', 'values' => [3, 11, 15, 27, 18, 10, 9, 4, 1, 5, 16, 6, 5, 1, 9]],
             ['label' => 'continuing', 'color' => '#8d230f', 'values' => [11, 18, 17, 58, 50, 9, 29, 13, 3, 3, 16, 0, 18, 0, 18]],
             ['label' => 'transfer', 'color' => '#50CB93', 'values' => [1, 3, 1, 10, 7, 1, 0, 0, 0, 0, 2, 0, 0, 0, 4]]
    ];

    $programs9 = ['Acct', 'Bio/Kines', 'Biomed', 'Bmt', 'CriJ', 'DSA', 'Educ', 'Emco', 'FrnsBio', 'FrnsSci', 'GenStud', 'HlthSci', 'HSv', 'MedLabSci', 'Psyc'];

    $series9 = [
        'title' => "Fall 2021 TRAD Enrollment",
        'subtitle' => "by Program and by Entry-type",
        'x_axis' => 'Programs',
        'y_axis' => 'Percentages',
        'categories' => $programs9,
        'data' => $data9,
    ];

    @endphp

    <h2>Figure 9 - Fall 2021 TRAD Enrolled by Program and by Entry-type (percentage)</h2>
    <stacked-percentage-column-chart 
        :series='@json($series9)'
        :chart-width="1200"
        :chart-height="600">
    </stacked-percentage-column-chart>
    

</div>

    <script src="/js/app.js"></script>
</body>
</html>