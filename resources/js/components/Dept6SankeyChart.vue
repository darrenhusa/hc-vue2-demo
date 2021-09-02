<template>
    <div id="container"></div>
</template>

<script>
// var Highcharts = require('highcharts');
import Highcharts from 'highcharts';
import Exporting from 'highcharts/modules/exporting';
import Sankey from 'highcharts/modules/sankey';
Exporting(Highcharts);
Sankey(Highcharts);

export default {
    name : "SankeyChart",
    props : {
      title: {
        type: String,
        default: ''
      },
      name: {
        type: String,
        default: ''
      },
    //   series : {
    //     type: Object,
    //     required: true
    //   }
    //   nodes : {
    //     type: Array,
    //   }
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
      // const seriesTemp = [];
      // const number = this.series.data.length

      // for(let i=0; i<number; i++){
      //   seriesTemp.push({
      //       name: this.series.data[i].label,
      //       data: this.series.data[i].values
      //   });
      // }

      // alert(seriesTemp);
      // console.log(seriesTemp);

      this.target = Highcharts.chart(this.$el, {

        chart: {
        //   inverted: true
        },
    title: {
        text: this.title
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. {point.from} to {point.to}, {point.weight}.'
        }
    },
    series: [{
        keys: ['from', 'to', 'weight'],
        data: [
          //part 1
          ['Criminal Justice', 'Criminal Justice2', 58],
          ['Criminal Justice', 'Changed to Outside Major2', 2],
          ['Criminal Justice', 'Earned Bachelors2', 0],
          ['Criminal Justice', 'Stop-out2', 15],
          
          //part 2
          ['Criminal Justice2', 'Criminal Justice3', 33],
          ['Criminal Justice2', 'Entered Graduate Program3', 1],
          ['Criminal Justice2', 'Changed to Outside Major3', 2],
          ['Criminal Justice2', 'Earned Bachelors3', 13],
          ['Criminal Justice2', 'Stop-out3', 11],
          
        ],
  nodes: [{
            id: 'Criminal Justice',
            name: 'Criminal Justice',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Criminal Justice2',
            name: 'Criminal Justice',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Criminal Justice3',
            name: 'Criminal Justice',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        
        {
            id: 'Changed to Outside Major2',
            name: 'Changed to Outside Major',
            color: '#434348'
        },
        {
            id: 'Earned Bachelors2',
            name: 'Earned Bachelors',
            color: '#f7a35c'
        },
        {
            id: 'Stop-out2',
            name: 'Stop-out',
            color: '#8085e9'
        },

        {
            id: 'Entered Graduate Program3',
            name: 'Entered Graduate Program',
            colorIndex: 8
        },

        // {
        //     id: 'Entered Graduate Program3',
        //     name: 'Entered Graduate Program',
        //     colorIndex: 8
        // },
        
        {
            id: 'Changed to Outside Major3',
            name: 'Changed to Outside Major',
            color: '#434348'
        },
        {
            id: 'Earned Bachelors3',
            name: 'Earned Bachelors',
            color: '#f7a35c'
        },
        {
            id: 'Stop-out3',
            name: 'Stop-out',
            color: '#8085e9'
        },

      ],
        type: 'sankey',
        name: this.name
      }],
       credits: {
          enabled: false
        }
    });
  },
//   beforeDestroy: function() {
//     this.target.destroy();
//   },
} // end export default

</script>
