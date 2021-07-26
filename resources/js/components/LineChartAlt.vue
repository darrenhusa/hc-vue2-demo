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
        // type: Array,
        type: Object,
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
        series: seriesTemp,
        // [
        //   {
        //     name: this.series.data[0].label,
        //     data: this.series.data[0].values
        //   },
        //   {
        //     name: this.series.data[1].label,
        //     data: this.series.data[1].values
        //   },
        //   {
        //     name: this.series.data[2].label,
        //     data: this.series.data[2].values
        //   },
        //   {
        //     name: this.series.data[3].label,
        //     data: this.series.data[3].values
        //   },
        // ],
        credits: {
          enabled: false
        },
    });
  },
//   beforeDestroy: function() {
//     this.target.destroy();
//   },
} // end export default

</script>
