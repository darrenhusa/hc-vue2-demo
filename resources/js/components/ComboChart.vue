<template>
    <div id="container" v-bind:style="styleObject"></div>
</template>

<script>
// var Highcharts = require('highcharts');
import Highcharts from 'highcharts';
import Exporting from 'highcharts/modules/exporting';
Exporting(Highcharts);

export default {
    name : "ColumnChart",
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
      // showTable : {
      //   type: Boolean,
      //   default: true
      // }
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
      // const seriesTemp = [];
      // const number = this.series.data.length

      // for(let i=0; i<number; i++){
      //   seriesTemp.push({
      //       type: 'column',
      //       name: this.series.data[i].label,
      //       data: this.series.data[i].values,
      //       color: this.series.data[i].color
      //   });
      // }

      // alert(seriesTemp);
      // console.log(seriesTemp);

      this.target = Highcharts.chart(this.$el, {
            // chart: {
            //     type: 'column',
            //     // margin: [ 50, 50, 100, 80]
            // },
            plotOptions: {
                column: {
                    colorByPoint: true
                }
            },
            colors: ['blue', 'red', 'green', 'purple'],
            title: {
                text: '5-Year Average Retention Rates with Retention Goals'
            },
            subtitle: {
                    text: '(Full-time Traditional)'
            },
            xAxis: {
                categories: ['F1 to F2', 'F1 to SO', 'SO to JR', 'JR to SR'],
                // labels: {
                    // rotation: -45,
                    // align: 'right',
                    // style: {
                    //     fontSize: '13px',
                    //     fontFamily: 'Verdana, sans-serif'
                    // }
                // }
            },
            yAxis: {
                min: 0,
                max: 100,
                title: {
                    text: ''
                },
            },
            legend: {
                enabled: false
            },
            // tooltip: {
            //     formatter: function() {
            //         return '<b>'+ this.x +'</b><br/>'+
            //             'Population in 2008: '+ Highcharts.numberFormat(this.y, 1) +
            //             ' millions';
            //     }
            // },
            series: [{
                type: 'column',
                // name: 'results',
                data: [79.9, 51.4, 69.0, 75.0],
                dataLabels: {
                    enabled: true,
                    inside: true,
                    position: 'center',
                    // rotation: -90,
                    // color: '#FFFFFF',
                    // align: 'right',
                    // x: 4,
                    // y: 10,
                    // style: {
                        // fontSize: '13px',
                        // fontFamily: 'Verdana, sans-serif'
                    // }
                }
              },
                {
                type: 'scatter',
                data: [85.0, 65.0, 80.0, 80.0],
                dataLabels: {
                    enabled: true,
                    // color: 'red',
                    // inside: true,
                    // position: 'center',
                },
                symbol: 'square',
            }],
        });
    // });        
    } // end mounted()
//   beforeDestroy: function() {
//     this.target.destroy();
//   },
} // end export default

</script>
