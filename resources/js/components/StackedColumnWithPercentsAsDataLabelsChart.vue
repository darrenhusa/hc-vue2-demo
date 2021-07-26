<template>
    <div>
        <div class="container"></div>
    </div>
</template>

<script>
// var Highcharts = require('highcharts');
import Highcharts from 'highcharts';
import Exporting from 'highcharts/modules/exporting';
Exporting(Highcharts);

export default {
    name : "StackedColumnChartWithDataLabelPercents",
    props : {
      series : {
        // type: Array,
        type: Object,
        required: true
      },
    showDataTable : {
        type: Boolean,
        default: false
      },
	},
  	data : function() {
      return {
        // target: 'container'
        target: undefined
      }
    },

    // var vm = this;

    methods: {
        // NOT WORKING!!!!!!
        drawDataTable() {
            if (this.showDataTable) {
                Highcharts.drawTable;
            }
        }
    },

    mounted : function() {

    Highcharts.drawTable = function () {

    // user options
    var tableTop = 310,
        colWidth = 100,
        tableLeft = 20,
        rowHeight = 20,
        cellPadding = 2.5,
        valueDecimals = 1,
        valueSuffix = ' °C';

    // internal variables
    var chart = this,
        series = chart.series,
        renderer = chart.renderer,
        cellLeft = tableLeft;

    // draw category labels
    chart.xAxis[0].categories.forEach(function (name, i) {
        renderer.text(
            name,
            cellLeft + cellPadding,
            tableTop + (i + 2) * rowHeight - cellPadding
        )
            .css({
                fontWeight: 'bold'
            })
            .add();
    });

    series.forEach(function (serie, i) {
        cellLeft += colWidth;

        // Apply the cell text
        renderer.text(
            serie.name,
            cellLeft - cellPadding + colWidth,
            tableTop + rowHeight - cellPadding
        )
            .attr({
                align: 'right'
            })
            .css({
                fontWeight: 'bold'
            })
            .add();

        serie.data.forEach(function (point, row) {

            // Apply the cell text
            renderer.text(
                Highcharts.numberFormat(point.y, valueDecimals) + valueSuffix,
                cellLeft + colWidth - cellPadding,
                tableTop + (row + 2) * rowHeight - cellPadding
            )
                .attr({
                    align: 'right'
                })
                .add();

            // horizontal lines
            if (row === 0) {
                Highcharts.tableLine( // top
                    renderer,
                    tableLeft,
                    tableTop + cellPadding,
                    cellLeft + colWidth,
                    tableTop + cellPadding
                );
                Highcharts.tableLine( // bottom
                    renderer,
                    tableLeft,
                    tableTop + (serie.data.length + 1) * rowHeight + cellPadding,
                    cellLeft + colWidth,
                    tableTop + (serie.data.length + 1) * rowHeight + cellPadding
                );
            }
            // horizontal line
            Highcharts.tableLine(
                renderer,
                tableLeft,
                tableTop + row * rowHeight + rowHeight + cellPadding,
                cellLeft + colWidth,
                tableTop + row * rowHeight + rowHeight + cellPadding
            );

        });

        // vertical lines
        if (i === 0) { // left table border
            Highcharts.tableLine(
                renderer,
                tableLeft,
                tableTop + cellPadding,
                tableLeft,
                tableTop + (serie.data.length + 1) * rowHeight + cellPadding
            );
        }

        Highcharts.tableLine(
            renderer,
            cellLeft,
            tableTop + cellPadding,
            cellLeft,
            tableTop + (serie.data.length + 1) * rowHeight + cellPadding
        );

        if (i === series.length - 1) { // right table border

            Highcharts.tableLine(
                renderer,
                cellLeft + colWidth,
                tableTop + cellPadding,
                cellLeft + colWidth,
                tableTop + (serie.data.length + 1) * rowHeight + cellPadding
            );
        }

    });


};

/**
 * Draw a single line in the table
 */
Highcharts.tableLine = function (renderer, x1, y1, x2, y2) {
    renderer.path(['M', x1, y1, 'L', x2, y2])
        .attr({
            stroke: 'silver',
            'stroke-width': 1
        })
        .add();
};

      // console.log(this.series);
      // console.log(this.series.title);

      // see https://stackoverflow.com/questions/50144557/how-to-add-data-to-chart-js-with-a-for-loop/50144700
      const seriesTemp = [];
      const number = this.series.data.length

      for(let i=0; i<number; i++){
        seriesTemp.push({
            name: this.series.data[i].label,
            data: this.series.data[i].values
        });
      }

      // alert(seriesTemp);
      // console.log(seriesTemp);

      this.target = Highcharts.chart(this.$el, {
      chart: {
          type: 'column',
            events: {
                load: this.drawDataTable()
            },
        // borderWidth: 2,
        // width: 600,
        // height: 600
      },
      title: {
          text: this.series.title
      },
      xAxis: {
          categories: this.series.categories
      },
      yAxis: {
          min: 0,
          title: {
              text: this.series.y_axis
          },
          stackLabels: {
              enabled: true,
              style: {
                  fontWeight: 'bold',
                  color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
              }
          }
      },
      legend: {
          align: 'right',
          x: -70,
          verticalAlign: 'top',
          y: 20,
          floating: true,
          backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
          borderColor: '#CCC',
          borderWidth: 1,
          shadow: false
      },
      tooltip: {
          formatter: function() {
              return '<b>'+ this.x +'</b><br/>'+
                  this.series.name +': '+ this.y +'<br/>'+
                  'Total: '+ this.point.stackTotal;
          }
      },
      plotOptions: {
          column: {
              stacking: 'normal',
              dataLabels: {
                  enabled: true,
                  formatter: function () {
                      return Math.round(100 * this.y / this.total) + '%';
                  },
                  color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                  style: {
                      textShadow: '0 0 3px black, 0 0 3px black'
                  }
              }
          }
      },
      series: seriesTemp,

      credits: {
        enabled: false
      },
    });
  } // end mounted()
//   beforeDestroy: function() {
//     this.target.destroy();
//   },
} // end export default

</script>
