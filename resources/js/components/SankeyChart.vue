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
        default: 'Highcharts Sankey Diagram'
      },
      name: {
        type: String,
        default: 'Sankey demo series'
      },
      series : {
        type: Object,
        required: true
      }
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
          inverted: true
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
        data: this.series.data,
  nodes: [{
            id: 'Accounting2',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Biomedical Science2',
            color: '#f7a35c'
        }, {
            id: 'Business Management2',
            color: '#f45b5b'
        }, {
            id: 'Criminal Justice2',
            color: '#434348'
        },
        {
            id: 'Digital & Studio Arts2',
            color: '#f7a35c'
        },
        {
            id: 'Education2',
            color: '#8085e9'
        },
        {
            id: 'English2',
            color: '#2b908f'
        },
        {
            id: 'Forensic Science2',
            color: '#91e8e1'
        },

        {
            id: 'General Studies2',
            color: '#434348'
        },
        {
            id: 'Health Science2',
            color: '#90ed7d'
        },
        {
            id: 'Human Services2',
            color: '#f7a35c'
        },
        {
            id: 'Kinesiology2',
            color: '#8085e9'
        },
        {
            id: 'Medical Lab Science2',
            color: '#e4d354'
        },
        {
            id: 'Psychology2',
            color: '#2b908f'
        },
        {
            id: 'Stop-out2',
            color: '#2b908f'
        },

        {
            id: 'Accounting3',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Biomedical Science3',
            color: '#f7a35c'
        }, {
            id: 'Business Management3',
            color: '#f45b5b'
        }, {
            id: 'Criminal Justice3',
            color: '#434348'
        },
        {
            id: 'Digital & Studio Arts3',
            color: '#f7a35c'
        },
        {
            id: 'Education3',
            color: '#8085e9'
        },
        {
            id: 'English3',
            color: '#2b908f'
        },
        {
            id: 'Forensic Science3',
            color: '#91e8e1'
        },

        {
            id: 'General Studies3',
            color: '#434348'
        },
        {
            id: 'Health Science3',
            color: '#90ed7d'
        },
        {
            id: 'Human Services3',
            color: '#f7a35c'
        },
        {
            id: 'Kinesiology3',
            color: '#8085e9'
        },
        {
            id: 'Medical Lab Science3',
            color: '#e4d354'
        },
        {
            id: 'Psychology3',
            color: '#2b908f'
        },
        {
            id: 'Stop-out3',
            color: '#2b908f'
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
