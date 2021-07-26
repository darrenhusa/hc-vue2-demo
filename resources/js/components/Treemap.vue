<template>
    <div>
        <div class="container"></div>
    </div>
</template>

<script>
// var Highcharts = require('highcharts');
import Highcharts from 'highcharts';
import Heatmap from 'highcharts/modules/heatmap';
import Treemap from 'highcharts/modules/treemap';
import Exporting from 'highcharts/modules/exporting';
Exporting(Highcharts);
Heatmap(Highcharts);
Treemap(Highcharts);

export default {
    name : "Treemap",
    props : {
      series : {
        // type: Array,
        type: Object,
        required: true
      },
      algorithm : {
        type: String,
        // required: true,
        default: 'sliceAndDice'
      },

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
            name: this.series.data[i].name,
            value: this.series.data[i].value,
            colorValue: this.series.data[i].colorValue,
        });
      }

      // alert(seriesTemp);
      // console.log(seriesTemp);

      this.target = Highcharts.chart(this.$el, {
    colorAxis: {
        minColor: '#FFFFFF',
        maxColor: Highcharts.getOptions().colors[0]
    },
    series: [{
        type: 'treemap',
        layoutAlgorithm: this.algorithm,
        data: seriesTemp
        // [{
        //     name: 'A',
        //     value: 6,
        //     colorValue: 1
        // }, {
        //     name: 'B',
        //     value: 6,
        //     colorValue: 2
        // }, {
        //     name: 'C',
        //     value: 4,
        //     colorValue: 3
        // }, {
        //     name: 'D',
        //     value: 3,
        //     colorValue: 4
        // }, {
        //     name: 'E',
        //     value: 2,
        //     colorValue: 5
        // }, {
        //     name: 'F',
        //     value: 2,
        //     colorValue: 6
        // }, {
        //     name: 'G',
        //     value: 1,
        //     colorValue: 7
        // 
      // }]
    }],
    title: {
        text: this.series.title
    },

    credits: {
        enabled: false
      }
  });
}
//   beforeDestroy: function() {
//     this.target.destroy();
//   },
} // end export default

</script>
