<template>
    <div id="container" v-bind:style="styleObject"></div>
</template>

<script>
// var Highcharts = require('highcharts');
import Highcharts from 'highcharts';
import Exporting from 'highcharts/modules/exporting';
Exporting(Highcharts);

export default {
    name : "StackedPercentageColumnChart",
    props : {
      series : {
        // type: Array,
        type: Object,
        required: true
      },
      chartWidth: {
        type: Number,
        default: 300
      },
      chartHeight: {
        type: Number,
        default: 300
      }
	},
  	data : function() {
      return {
        // target: 'container'
        target: undefined,
        styleObject: {
          width: this.chartWidth + 'px',
          height: this.chartHeight + 'px',
          border: '1px solid gray',
        },
      }
    },
    mounted : function() {
      // console.log(this.series);
      // console.log(this.series.title);

      // see https://stackoverflow.com/questions/50144557/how-to-add-data-to-chart-js-with-a-for-loop/50144700
      const seriesTemp = [];
      const number = this.series.data.length

      for(let i=0; i<number; i++){
        seriesTemp.push({
            name: this.series.data[i].label,
            data: this.series.data[i].values,
            color: this.series.data[i].color
        });
      }

      // alert(seriesTemp);
      // console.log(seriesTemp);

      this.target = Highcharts.chart(this.$el, {
          chart: {
              type: 'column'
          },
          title: {
              text: this.series.title
          },
          xAxis: {
              title: {
                text: this.series.x_axis
              },
              categories: this.series.categories
          },
          yAxis: {
              min: 0,
              title: {
                  text: this.series.y_axis
              }
          },
          tooltip: {
              pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
              shared: true
          },
          plotOptions: {
              column: {
                  stacking: 'percent'
              },
              dataLabels: {
                    enabled: true,
                    inside: true,
                    style: {
                        color: 'black'
                    },
                    formatter: function() {
                      // return Highcharts.numberFormat(this.y / this.series.chart.series[this.series.index - 1].data[this.point.index].y * 100, 2) + '%'
                    return '<span>{point.percentage:.0f}%'
                }
              },
          },
          series: seriesTemp,
          
          credits: {
            enabled: false
          }
        });
  } // end mounted()

//   beforeDestroy: function() {
//     this.target.destroy();
//   },
} // end export default

</script>
