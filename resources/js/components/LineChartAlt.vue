<template>
    <div>
        <div class="container"></div>
        <!-- <highcharts :options="chartOptions"></highcharts> -->
        <!-- <button id="button" v-on:click="exportChart" class="bg-gray-200 p-2">Export chart</button> -->
        <!-- <button id="button" class="bg-gray-200 p-2">Export chart</button> -->
    </div>
</template>

<script>
// var Highcharts = require('highcharts');
import Highcharts from 'highcharts';
import Exporting from 'highcharts/modules/exporting';
Exporting(Highcharts);

export default {
    name : "LineChartAlt",
    props : {
      series : {
        type: Array,
        required: true
      }
	},
  	data : function() {
      return {
        // target: 'container'
        target: undefined
      }
    },
    mounted : function() {
      // console.log(this.series);
      // console.log(this.series.title);

      this.target = Highcharts.chart(this.$el, {
        title: {
          text: this.series.title,
          x: -20 //center
        },
        subtitle: {
          text: this.series.subtitle,
          x: -20
        },
        xAxis: {
          categories: this.series.categories
        },
        yAxis: {
          title: {
          text: this.series.y_axis
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },
      tooltip: {
        valueSuffix: '°C'
      },
      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
  	        borderWidth: 0
      },
        series: [
        {
          name: this.series.names[0],
          data: this.series.data[0]
        },
        {
          name: this.series.names[1],
          data: this.series.data[1]
        },
        {
          name: this.series.names[2],
          data: this.series.data[2]
        },
        {
          name: this.series.names[3],
          data: this.series.data[3]
        },
        ],
        credits: {
          enabled: false
        },
    });
  },
//   beforeDestroy: function() {
//     this.target.destroy();
//   },
}
</script>
