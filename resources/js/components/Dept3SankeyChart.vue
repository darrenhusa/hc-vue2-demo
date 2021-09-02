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
          ['Accounting', 'Accounting2', 12],
          ['Accounting', 'Changed to Outside Major2', 1],
          ['Accounting', 'Earned Bachelors2', 0],
          ['Accounting', 'Stop-out2', 1],
          
          //part 2
          ['Accounting2', 'Accounting3', 9],
          ['Accounting2', 'Changed to Outside Major3', 1],
          ['Accounting2', 'Earned Bachelors3', 2],
          ['Accounting2', 'Stop-out3', 1],
          
          //part 1
          ['Business Management', 'Business Management2', 74],
          ['Business Management', 'Changed to Outside Major2', 3],
          ['Business Management', 'Earned Bachelors2', 2],
          ['Business Management', 'Stop-out2', 16],
          
          //part 2
          ['Business Management2', 'Business Management3', 41],
          ['Business Management2', 'Entered Graduate Program3', 2],
          ['Business Management2', 'Changed to Outside Major3', 4],
          ['Business Management2', 'Earned Bachelors3', 9],
          ['Business Management2', 'Stop-out3', 21],
          ['Stop-out2', 'Business Management3', 2],
          
        ],
  nodes: [{
            id: 'Accounting',
            name: 'Accounting',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Business Management',
            name: 'Business Management',
            color: '#f7a35c'
        }, 
        {
            id: 'Accounting2',
            name: 'Accounting',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Business Management2',
            name: 'Business Management',
            color: '#f7a35c'
        }, 
        {
            id: 'Accounting3',
            name: 'Accounting',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Business Management3',
            name: 'Business Management',
            color: '#f7a35c'
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
