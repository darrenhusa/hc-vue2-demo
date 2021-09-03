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
          ['Education', 'Education2', 29],
          ['Education', 'Changed to Outside Major2', 5],
          ['Education', 'Earned Bachelors2', 1],
          ['Education', 'Stop-out2', 4],
          
          //part 2
          ['Education2', 'Education3', 18],
          ['Education2', 'Changed to Outside Major3', 5],
          ['Education2', 'Earned Bachelors3', 5],
          ['Education2', 'Stop-out3', 6],
          
        ],
  nodes: [{
            id: 'Education',
            name: 'Education',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Education2',
            name: 'Education',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Education3',
            name: 'Education',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        
        {
            id: 'Changed to Outside Major2',
            name: 'Changed to Outside Major',
            color: '#e4d354'
        },
        {
            id: 'Earned Bachelors2',
            name: 'Earned Bachelors',
            color: '#2b908f'
        },
        {
            id: 'Stop-out2',
            name: 'Stop-out',
            color: '#f45b5b'
        },

        // {
        //     id: 'Entered Graduate Program3',
        //     name: 'Entered Graduate Program',
        //     color: "#91e8e1"
        // },
        
        {
            id: 'Changed to Outside Major3',
            name: 'Changed to Outside Major',
            color: '#e4d354'
        },
        {
            id: 'Earned Bachelors3',
            name: 'Earned Bachelors',
            color: '#2b908f'
        },
        {
            id: 'Stop-out3',
            name: 'Stop-out',
            color: '#f45b5b'
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
