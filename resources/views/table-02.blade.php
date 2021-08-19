<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html Table with Sparklines</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style>
#result {
    text-align: right;
    color: gray;
    min-height: 2em;
}
#table-sparkline {
    margin: 0 auto;
    border-collapse: collapse;
}
th {
    font-weight: bold;
    text-align: left;
}
td, th {
    padding: 5px;
    border-bottom: 1px solid silver;
    height: 20px;
}

thead th {
    border-top: 2px solid gray;
    border-bottom: 2px solid gray;
}
.highcharts-tooltip>span {
    background: white;
    border: 1px solid silver;
    border-radius: 3px;
    box-shadow: 1px 1px 2px #888;
    padding: 8px;
}

</style>
</head>
<body>
@php
  
  $data = [
    ["Accounting", [18, 19, 12, 15, 15]],
    ["Biokinetics/Kinesiology", [14, 19, 17, 31, 31]],
    ["Biomedical Science", [41, 25, 20, 31, 31]],
    ["Business Management", [80, 72, 73, 92, 92]],
    ["Computer Information Systems (*)", [7, 2, 2, 0, 0]],
    ["Criminal Justice", [77, 71, 80, 72, 72]],
    ["Digital & Studio Arts", [18, 14, 14, 18, 18]],
    ["Elementary Education", [27, 28, 45, 36, 36]],
    ["English & Media Communications", [23, 15, 20, 16, 16]],
    ["Forensic Biotechnology (*)", [8, 5, 2, 3, 3]],
    ["Forensic Science", [0, 0, 5, 8, 8]],
    ["General Studies", [29, 46, 41, 30, 30]],
    ["Health Science", [0, 0, 0, 5, 5]],
    ["Human Services", [27, 12, 19, 22, 22]],
    ["Integrated Studies", [6, 2, 1, 0, 0]],
    ["Legal/Paralegal Studies (*)", [5, 2, 2, 0, 0]],
    ["Medical Lab Science", [0, 0, 0, 1, 1]],
    ["Psychology", [19, 21, 31, 29, 29]],
    ["Theology/Religious Studies (*)", [4, 0, 0, 0, 0]],
    ["Grand Total", [403, 353, 384, 409, 409]],
  ];

  foreach ($data as $val)
   {
       $programs[] = $val[0];
       $numbers[] = $val[1];
       $sparkline[] = implode(', ', $val[1]);
    }

    $length = count($data);

@endphp

<h2>Full-Time Undergraduates - First Majors - Traditional Programs</h2>
<div id="result"></div>
<table id="table-sparkline">
    <thead>
        <tr>
            <th></th>
            <th>Fall 2017</th>
            <th>Fall 2018</th>
            <th>Fall 2019</th>
            <th>Fall 2020</th>
            <th>Fall 2021</th>
            <th>Sparklines</th>
        </tr>
    </thead>
    <tbody id="tbody-sparkline">
        @for ($i = 0; $i < $length; $i++)
        <tr>
            <th>{{ $programs[$i] }}</td>
            @for ($j = 0; $j < 5; $j++)
                <td>{{ $numbers[$i][$j] }}</td>
            @endfor
            <td data-sparkline="{{ $sparkline[$i] }}" />
        </tr>
        @endfor  
    </tbody>
</table>

<script>
/**
 * Create a constructor for sparklines that takes some sensible defaults and merges in the individual
 * chart options. This function is also available from the jQuery plugin as $(element).highcharts('SparkLine').
 */
Highcharts.SparkLine = function (a, b, c) {
    const hasRenderToArg = typeof a === 'string' || a.nodeName;
    let options = arguments[hasRenderToArg ? 1 : 0];
    const defaultOptions = {
        chart: {
            renderTo: (options.chart && options.chart.renderTo) || (hasRenderToArg && a),
            backgroundColor: null,
            borderWidth: 0,
            type: 'area',
            margin: [2, 0, 2, 0],
            width: 120,
            height: 20,
            style: {
                overflow: 'visible'
            },
            // small optimalization, saves 1-2 ms each sparkline
            skipClone: true
        },
        title: {
            text: ''
        },
        credits: {
            enabled: false
        },
        xAxis: {
            labels: {
                enabled: false
            },
            title: {
                text: null
            },
            startOnTick: false,
            endOnTick: false,
            tickPositions: []
        },
        yAxis: {
            endOnTick: false,
            startOnTick: false,
            labels: {
                enabled: false
            },
            title: {
                text: null
            },
            tickPositions: [0]
        },
        legend: {
            enabled: false
        },
        tooltip: {
            hideDelay: 0,
            outside: true,
            shared: true
        },
        plotOptions: {
            series: {
                animation: false,
                lineWidth: 1,
                shadow: false,
                states: {
                    hover: {
                        lineWidth: 1
                    }
                },
                marker: {
                    radius: 1,
                    states: {
                        hover: {
                            radius: 2
                        }
                    }
                },
                fillOpacity: 0.25
            },
            column: {
                negativeColor: '#910000',
                borderColor: 'silver'
            }
        }
    };

    options = Highcharts.merge(defaultOptions, options);
    console.log(hasRenderToArg);
    return hasRenderToArg ?
        new Highcharts.Chart(a, options, c) :
        new Highcharts.Chart(options, b);
};

const start = +new Date(),
    tds = Array.from(document.querySelectorAll('td[data-sparkline]')),
    fullLen = tds.length;

let n = 0;

// Creating 153 sparkline charts is quite fast in modern browsers, but IE8 and mobile
// can take some seconds, so we split the input into chunks and apply them in timeouts
// in order avoid locking up the browser process and allow interaction.
function doChunk() {
    const time = +new Date(),
        len = tds.length;

    for (let i = 0; i < len; i += 1) {
        const td = tds[i];
        const stringdata = td.dataset.sparkline;
        const arr = stringdata.split('; ');
        const data = arr[0].split(', ').map(parseFloat);
        const chart = {};

        if (arr[1]) {
            chart.type = arr[1];
        }

        Highcharts.SparkLine(td, {
            series: [{
                data: data,
                pointStart: 1
            }],
            tooltip: {
                headerFormat: '<span style="font-size: 10px">' + td.parentElement.querySelector('th').innerText + ', Q{point.x}:</span><br/>',
                pointFormat: '<b>{point.y}.000</b> USD'
            },
            chart: chart
        });

        n += 1;

        // If the process takes too much time, run a timeout to allow interaction with the browser
        if (new Date() - time > 500) {
            tds.splice(0, i + 1);
            setTimeout(doChunk, 0);
            break;
        }

        // Print a feedback on the performance
        // if (n === fullLen) {
        //     document.getElementById('result').innerHTML = 'Generated ' + fullLen + ' sparklines in ' + (new Date() - start) + ' ms';
        // }
    }
}
doChunk();
</script>
</body>
</html>