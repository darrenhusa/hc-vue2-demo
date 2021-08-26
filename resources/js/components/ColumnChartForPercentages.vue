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
        subtitle: {
            text: this.series.subtitle
        },
        xAxis: {
            categories: this.series.categories,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: this.series.y_axis
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}</td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0,
                borderWidth: 0,
            
                dataLabels: {
                  enabled: true,
                  inside: false,
                
                  formatter: function () {
                    return this.y + '%'; 
                },
              },    
            },
        },
        series: seriesTemp,
          legend: {
            enabled: false
        },  
        credits: {
          enabled: false
        },

        exporting: {
          showTable: this.showTable
        }
      });        
    } // end mounted()
//   beforeDestroy: function() {
//     this.target.destroy();
//   },
} // end export default

</script>
