<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highcharts Vue 2 Wrapper Demo</title>
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
</head>
<body>
   
    @php
    
    // treemap
    $data3 = [['name' => 'A', 'value' => 6, 'colorValue' => 1],
              ['name' => 'B', 'value' => 6, 'colorValue' => 2],
              ['name' => 'C', 'value' => 4, 'colorValue' => 3],
              ['name' => 'D', 'value' => 3, 'colorValue' => 4],
              ['name' => 'E', 'value' => 2, 'colorValue' => 5],
              ['name' => 'F', 'value' => 2, 'colorValue' => 6],
              ['name' => 'G', 'value' => 1, 'colorValue' => 7],
    ];

    $series3 = [
        'title' => 'Highcharts Treemap',
        'data' => $data3
    ];

    $data4 = [['Accounting', 'Accounting2', 2],
           ['Accounting', 'Health Science2', 1],

          ['Biomedical Science', 'Biomedical Science2', 7],
          ['Biomedical Science', 'General Studies2', 1],
          ['Biomedical Science', 'Psychology2', 1],
          ['Biomedical Science', 'Stop-out2', 4],

          ['Business Management', 'Business Management2', 21],
          ['Business Management', 'Stop-out2', 4],
          ['Business Management', 'Psychology2', 1],
          ['Business Management', 'Digital & Studio Arts2', 1],

          ['Criminal Justice', 'Criminal Justice2', 9],
          ['Criminal Justice', 'Business Management2', 2],
          ['Criminal Justice', 'Stop-out2', 6],

          ['Digital & Studio Arts', 'Digital & Studio Arts2', 2],
          ['Digital & Studio Arts', 'Stop-out2', 8],

          ['Education', 'Education2', 5],
          ['Education', 'General Studies2', 2],
          ['Education', 'Human Services2', 1],
          ['Education', 'Business Management2', 1],

          ['English', 'English2', 3],
          ['English', 'Education2', 1],

          ['Forensic Science', 'Forensic Science2', 1],
          ['Forensic Science', 'Stop-out2', 4],

          ['General Studies', 'General Studies2', 8],
          ['General Studies', 'Education2', 1],
          ['General Studies', 'Stop-out2', 6],

          ['Health Science', 'Health Science2', 5],
          ['Health Science', 'Stop-out2', 1],

          ['Human Services', 'Human Services2', 4],

          ['Kinesiology', 'Kinesiology2', 6],
          ['Kinesiology', 'Digital & Studio Arts2', 1],
          ['Kinesiology', 'Psychology2', 1],
          ['Kinesiology', 'Stop-out2', 2],

          ['Medical Lab Science', 'Criminal Justice2', 1],

          ['Psychology', 'Psychology2', 5],
          ['Psychology', 'Stop-out2', 4],

          ['Accounting2', 'Accounting3', 1],
          ['Accounting2', 'Health Science3', 1],
          ['Accounting2', 'Stop-out3', 1],

          ['Biomedical Science2', 'Biomedical Science3', 5],
          ['Biomedical Science2', 'Psychology3', 1],
          ['Biomedical Science2', 'Stop-out3', 7],

          ['Business Management2', 'Business Management3', 13],
          ['Business Management2', 'Digital & Studio Arts3', 1],
          ['Business Management2', 'Psychology3', 2],
          ['Business Management2', 'Stop-out3', 11],

          ['Criminal Justice2', 'Criminal Justice3', 7],
          ['Criminal Justice2', 'Business Management3', 1],
          ['Criminal Justice2', 'Stop-out3', 9],

          ['Digital & Studio Arts2', 'Digital & Studio Arts3', 2],
          ['Digital & Studio Arts2', 'Stop-out3', 8],

          ['Education2', 'Education3', 3],
          ['Education2', 'Business Management3', 1],
          ['Education2', 'Psychology3', 1],
          ['Education2', 'Stop-out3', 4],

          ['English2', 'English3', 2],
          ['English2', 'Stop-out3', 2],

          ['Forensic Science2', 'Forensic Science3', 1],
          ['Forensic Science2', 'Stop-out3', 4],

          ['General Studies2', 'General Studies3', 2],
          ['General Studies2', 'Human Services3', 1],
          ['General Studies2', 'Stop-out3', 12],

          ['Health Science2', 'Health Science3', 2],
          ['Health Science2', 'Stop-out3', 4],

          ['Human Services2', 'Human Services3', 1],
          ['Human Services2', 'Stop-out3', 3],

          ['Kinesiology2', 'Kinesiology3', 4],
          ['Kinesiology2', 'Digital & Studio Arts3', 1],
          ['Kinesiology2', 'Stop-out3', 5],

          ['Medical Lab Science2', 'Stop-out3', 1],

          ['Psychology2', 'Psychology3', 2],
          ['Psychology2', 'Business Management3', 1],
          ['Psychology2', 'Human Services3', 1],
          ['Psychology2', 'Stop-out3', 5]];
    
        $series4 = ['data' => $data4];

    @endphp
   
    <div id="app">

        <h2>Sankey</h2>
        <h3>Fall 2020 to Spring 2021 to Fall 2021 TRAD Retention in Majors Sankey</h3>
        <sankey-chart></sankey-chart>
        
    
    </div>
    <script src="/js/app.js"></script>
</body>
</html>