<template>
    <div>
        <div class="container"></div>
    </div>
</template>

<script>
// var Highcharts = require('highcharts');
import Highcharts from 'highcharts';
// import Heatmap from 'highcharts/modules/heatmap';
import Treemap from 'highcharts/modules/treemap';
import Exporting from 'highcharts/modules/exporting';
Exporting(Highcharts);
// Heatmap(Highcharts);
Treemap(Highcharts);

export default {
    name : "HierarchicalTreemap",
    // props : {
    //   series : {
    //     // type: Array,
    //     type: Object,
    //     required: true
    //   },
    //   // algorithm : {
      //   type: String,
      //   // required: true,
      //   default: 'sliceAndDice'
      // },

	// },
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
      // const seriesTemp = [];
      // const number = this.series.data.length

      // for(let i=0; i<number; i++){
      //   seriesTemp.push({
      //       id: this.series.data[i].id,
      //       name: this.series.data[i].name,
      //       color: this.series.data[i].color,
      //   });
      // }

      // alert(seriesTemp);
      // console.log(seriesTemp);

      this.target = Highcharts.chart(this.$el, {
            series: [{
            type: "treemap",
            layoutAlgorithm: 'stripes',
            alternateStartingDirection: true,
            levels: [{
                level: 1,
                layoutAlgorithm: 'sliceAndDice',
                dataLabels: {
                    enabled: true,
                    align: 'left',
                    verticalAlign: 'top',
                    style: {
                        fontSize: '15px',
                        fontWeight: 'bold'
                    }
                }
            }],
            data: [{
                id: 'A',
                name: 'Apples',
                color: "#EC2500"
            }, {
                id: 'B',
                name: 'Bananas',
                color: "#ECE100"
            }, {
                id: 'O',
                name: 'Oranges',
                color: '#EC9800'
            }, {
                name: 'Anne',
                parent: 'A',
                value: 5
            }, {
                name: 'Rick',
                parent: 'A',
                value: 3
            }, {
                name: 'Peter',
                parent: 'A',
                value: 4
            }, {
                name: 'Anne',
                parent: 'B',
                value: 4
            }, {
                name: 'Rick',
                parent: 'B',
                value: 10
            }, {
                name: 'Peter',
                parent: 'B',
                value: 1
            }, {
                name: 'Anne',
                parent: 'O',
                value: 1
            }, {
                name: 'Rick',
                parent: 'O',
                value: 3
            }, {
                name: 'Peter',
                parent: 'O',
                value: 3
            }, {
                name: 'Susanne',
                parent: 'Kiwi',
                value: 2,
                color: '#9EDE00'
            }]
        }],
        title: {
            text: 'Fruit consumption'
        }
    });
  } // end mounted()
//   beforeDestroy: function() {
//     this.target.destroy();
//   },
} // end export default

</script>
