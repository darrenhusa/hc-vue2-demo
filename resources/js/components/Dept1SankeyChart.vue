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
          ['General Studies', 'General Studies2', 17],
          ['General Studies', 'Changed Programs2', 8],
          ['General Studies', 'Earned Bachelors2', 2],
          ['General Studies', 'Stop-out2', 13],
          
          //part 2
          ['General Studies2', 'General Studies3', 7],
          ['Stop-out2', 'General Studies3', 1],
          ['General Studies2', 'Changed Programs3', 11],
          ['General Studies2', 'Earned Bachelors3', 3],
          ['General Studies2', 'Stop-out3', 18],
          
          //part 1
          ['Human Services', 'Human Services2', 11],
          ['Human Services', 'Changed Programs2', 3],
          ['Human Services', 'Earned Bachelors2', 1],
          ['Human Services', 'Stop-out2', 4],
          
          //part 2
          ['Human Services2', 'Human Services3', 7],
          ['Human Services2', 'Changed Programs3', 3],
          ['Human Services2', 'Earned Bachelors3', 2],
          ['Human Services2', 'Stop-out3', 7],
          
          //part 1
          ['Psychology', 'Psychology2', 27],
          ['Psychology', 'Changed Programs2', 5],
          ['Psychology', 'Earned Bachelors2', 1],
          ['Psychology', 'Stop-out2', 3],

          //part 2
          ['Psychology2', 'Psychology3', 19],
          ['Stop-out2', 'Psychology3', 0],
          ['Psychology2', 'Changed Programs3', 5],
          ['Psychology2', 'Earned Bachelors3', 2],
          ['Psychology2', 'Stop-out3', 10],

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
