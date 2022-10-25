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
          ['Accounting', 'Accounting2', 13],
          ['Accounting', 'Changed Programs2', 1],
          ['Accounting', 'Earned Bachelors2', 1],
          ['Accounting', 'Stop-out2', 1],
          
          //part 2
          ['Accounting2', 'Accounting3', 10],
          ['Accounting2', 'Changed Programs3', 2],
          ['Accounting2', 'Earned Bachelors3', 1],
          ['Accounting2', 'Stop-out3', 3],
          
          //part 1
          ['Business Management', 'Business Management2', 83],
          ['Business Management', 'Changed Programs2', 3],
          ['Business Management', 'Earned Bachelors2', 1],
          ['Business Management', 'Stop-out2', 11],
          
          //part 2
          ['Business Management2', 'Business Management3', 46],
          ['Stop-out2', 'Business Management3', 0],
          ['Business Management2', 'Changed Programs3', 7],
          ['Business Management2', 'Earned Bachelors3', 6],
          ['Business Management2', 'Stop-out3', 39],
          
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
            color: '#434348'
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
            color: '#434348'
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
            color: '#434348'
        }, 
        
        {
            id: 'Changed Programs2',
            name: 'Changed Programs',
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
        
        {
            id: 'Changed Programs3',
            name: 'Changed Programs',
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
