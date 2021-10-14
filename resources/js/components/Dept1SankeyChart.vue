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
          ['General Studies', 'General Studies2', 19],
          ['General Studies', 'Changed to Outside Major2', 3],
          ['General Studies', 'Earned Bachelors2', 0],
          ['General Studies', 'Stop-out2', 13],
          
          //part 2
          ['General Studies2', 'General Studies3', 8],
          ['General Studies2', 'Changed to Outside Major3', 6],
          ['General Studies2', 'Earned Bachelors3', 1],
          ['General Studies2', 'Stop-out3', 7],
          ['Stop-out2', 'General Studies3', 2],
          
          //part 1
          ['Human Services', 'Human Services2', 18],
          ['Human Services', 'General Studies2', 1],
          ['Human Services', 'Changed to Outside Major2', 1],
          ['Human Services', 'Earned Bachelors2', 1],
          ['Human Services', 'Stop-out2', 1],
          
          //part 2
          ['Human Services2', 'Human Services3', 12],
          ['Human Services2', 'General Studies3', 1],
          ['Human Services2', 'Changed to Outside Major3', 3],
          ['Human Services2', 'Earned Bachelors3', 0],
          ['Human Services2', 'Stop-out3', 4],
          
          //part 1
          ['Psychology', 'Psychology2', 23],
          ['Psychology', 'Changed to Outside Major2', 0],
          ['Psychology', 'Earned Bachelors2', 1],
          ['Psychology', 'Stop-out2', 8],

          //part 2
          ['Psychology2', 'Psychology3', 16],
          ['Psychology2', 'Human Services3', 1],
          ['Psychology2', 'Changed to Outside Major3', 1],
          ['Psychology2', 'Earned Bachelors3', 3],
          ['Psychology2', 'Stop-out3', 2],
          ['Stop-out2', 'Psychology3', 1],

        ],
  nodes: [{
            id: 'General Studies',
            name: 'General Studies',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Human Services',
            name: 'Human Services',
            color: '#434348'
        }, {
            id: 'Psychology',
            name: 'Psychology',
            color: '#90ed7d'
        },
        {
            id: 'General Studies2',
            name: 'General Studies',
            color: '#7cb5ec'
        },
        {
            id: 'Human Services2',
            name: 'Human Services',
            color: '#434348'
        }, 
        {
            id: 'Psychology2',
            name: 'Psychology',
            color: '#90ed7d'
        }, 
        {
            id: 'General Studies3',
            name: 'General Studies',
            color: '#7cb5ec'
        },
        {
            id: 'Human Services3',
            name: 'Human Services',
            color: '#434348'
        }, {
            id: 'Psychology3',
            name: 'Psychology',
            color: '#90ed7d'
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
