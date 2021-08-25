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
        'categories' => ['Fall 2017', 'Fall 2018', 'Fall 2019', 'Fall 2020', 'Fall 2021'],
        'data' => $data31,
    ];

    @endphp

<div id="app">

    <h2>Figure 31 - Average High School GPA of First-time, Full-time Freshman</h2>
    <column-chart 
        :series='@json($series31)'
        :chart-width="1200"
        :chart-height="600">
    </column-chart>

    @php
    
    $data32 = [
             ['label' => '3.0 and above', 'color' => '#217ca3', 'values' => [35.2, 33.0, 35.6, 35.6, 35.6]],
             ['label' => '2.5 to 2.99', 'color' => '#8d230f', 'values' => [26.4, 25.2, 29.7, 29.7, 29.7]],
             ['label' => '2.0 to 2.49', 'color' => 'lightgreen', 'values' => [28.6, 20.4, 17.8, 17.8, 17.8]],
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
             ['label' => 'MATH 103', 'color' => '#217ca3', 'values' => [255, 297, 285, 195, 195]],
             ['label' => 'MATH 097', 'color' => '#8d230f', 'values' => [225, 171, 180, 156, 156]],
             ['label' => 'MATH 095', 'color' => '#50CB93', 'values' => [78, 93, 105, 99, 99]],
             ['label' => 'GENL 095', 'color' => 'purple', 'values' => [16, 31, 0, 0, 0]],
             ['label' => '(EWPC)/EMCO 096', 'color' => 'lightblue', 'values' => [111, 213, 240, 150, 150]],
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
             ['label' => 'Cr Hrs in Dev', 'color' => '#217ca3', 'values' => [685, 805, 810, 600, 600]],
             ['label' => 'Cr Hrs in TRAD (Non-Dev)', 'color' => '#8d230f', 'values' => [11651, 9839, 10430, 8740, 8740]],
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
    
    
    @php
    
    $data12 = [
             ['label' => 'continuing', 'color' => '#217ca3', 'values' => [278, 224, 226, 263, 263]],
             ['label' => 'first-time', 'color' => '#8d230f', 'values' => [99, 106, 135, 140, 140]],
             ['label' => 'new-2nd-degree', 'color' => '#50CB93', 'values' => [1, 0, 0, 0, 0]],
             ['label' => 'returning', 'color' => 'purple', 'values' => [1, 2, 0, 0, 0]],
             ['label' => 'transfer', 'color' => 'lightblue', 'values' => [60, 52, 53, 29, 29]],
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
    
    $data14 = [
             ['label' => 'continuing', 'color' => '#217ca3', 'values' => [125, 107, 87, 89, 89]],
             ['label' => 'first-time', 'color' => '#8d230f', 'values' => [0, 0, 0, 1, 1]],
             ['label' => 'returning', 'color' => '#50CB93', 'values' => [1, 0, 1, 2, 2]],
             ['label' => 'transfer', 'color' => 'purple', 'values' => [23, 34, 42, 41, 41]],
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
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers14[$j][$i] }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>
    
        @php
    
    $data15 = [
             ['label' => '0', 'color' => '#217ca3', 'values' => [0, 0, 0, 1, 1]],
             ['label' => '1-15', 'color' => '#8d230f', 'values' => [0, 0, 0, 0, 0]],
             ['label' => '16-30', 'color' => '#50CB93', 'values' => [0, 0, 1, 0, 0]],
             ['label' => '31-60', 'color' => 'purple', 'values' => [3, 1, 5, 6, 6]],
             ['label' => '61-90', 'color' => 'lightblue', 'values' => [10, 19, 23, 22, 22]],
             ['label' => '91 and above', 'color' => 'orange', 'values' => [10, 14, 13, 12, 12]],
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
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers15[$j][$i] }}</td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
        </div>
    
    
    
    @php
    
    $data17 = [
             ['label' => 'Black or African American', 'color' => '#217ca3', 'values' => [31.1, 33.9, 26.1, 28.8]],
             ['label' => 'Hispanics of any race', 'color' => '#8d230f', 'values' => [35.6, 23.2, 28.9, 30.3]],
             ['label' => 'Other', 'color' => '#50CB93', 'values' => [6.8, 8.9, 4.7, 6.0]],
             ['label' => 'White', 'color' => 'purple', 'values' => [26.5, 33.9, 40.3, 34.8]],
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
             ['label' => 'Black or African American', 'color' => '#217ca3', 'values' => [33.3, 22.5, 29.4, 27.6]],
             ['label' => 'Hispanics of any race', 'color' => '#8d230f', 'values' => [66.7, 35.0, 31.4, 33.1]],
             ['label' => 'Other', 'color' => '#50CB93', 'values' => [0.0, 0.0, 0.0, 0.0]],
             ['label' => 'White', 'color' => 'purple', 'values' => [0.0, 42.5, 39.2, 39.3]],
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
             ['label' => 'Is First-Generation', 'color' => '#217ca3', 'values' => [31, 31, 43, 53, 53]],
             ['label' => 'Is Not First-Generation', 'color' => '#8d230f', 'values' => [55, 73, 82, 72, 72]],
             ['label' => 'Unknown', 'color' => '#50CB93', 'values' => [10, 0, 7, 8, 8]],
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
                            <td style="text-align: center; padding-right: 100px;">{{ $numbers19[$j][$i] }}</td>
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