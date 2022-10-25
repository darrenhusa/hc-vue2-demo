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
          ['Biomedical Science', 'Biomedical Science2', 16],
          ['Biomedical Science', 'Changed Programs2', 3],
          ['Biomedical Science', 'Earned Bachelors2', 0],
          ['Biomedical Science', 'Stop-out2', 4],
          
          //part 2
          ['Biomedical Science2', 'Biomedical Science3', 7],
          ['Biomedical Science2', 'Changed Programs3', 4],
          ['Biomedical Science2', 'Earned Bachelors3', 3],
          ['Biomedical Science2', 'Stop-out3', 9],

          //part 1
          ['Forensic Biotechnology', 'Forensic Biotechnology2', 1],
          ['Forensic Biotechnology', 'Changed Programs2', 0],
          ['Forensic Biotechnology', 'Earned Bachelors2', 0],
          ['Forensic Biotechnology', 'Stop-out2', 0],
          
          //part 2
          ['Forensic Biotechnology2', 'Forensic Biotechnology3', 1],
          ['Forensic Biotechnology2', 'Changed Programs3', 0],
          ['Forensic Biotechnology2', 'Earned Bachelors3', 0],
          ['Forensic Biotechnology2', 'Stop-out3', 0],
          
          //part 1
          ['Forensic Science', 'Forensic Science2', 1],
          ['Forensic Science', 'Changed Programs2', 3],
          ['Forensic Science', 'Earned Bachelors2', 0],
          ['Forensic Science', 'Stop-out2', 0],
          
          //part 2
          ['Forensic Science2', 'Forensic Science3', 1],
          ['Forensic Science2', 'Changed Programs3', 3],
          ['Forensic Science2', 'Earned Bachelors3', 0],
          ['Forensic Science2', 'Stop-out3', 0],

          //part 1  
          ['Health Science', 'Health Science2', 4],
          ['Health Science', 'Changed Programs2', 0],
          ['Health Science', 'Earned Bachelors2', 0],
          ['Health Science', 'Stop-out2', 4],
          
          //part 2
          ['Health Science2', 'Health Science3', 3],
          ['Health Science2', 'Changed Programs3', 1],
          ['Health Science2', 'Earned Bachelors3', 0],
          ['Health Science2', 'Stop-out3', 4],

          //part 1
          ['Kinesiology', 'Kinesiology2', 25],
          ['Kinesiology', 'Changed Programs2', 1],
          ['Kinesiology', 'Earned Bachelors2', 1],
          ['Kinesiology', 'Stop-out2', 4],

          //part 2
          ['Kinesiology2', 'Kinesiology3', 17],
          ['Stop-out2', 'Kinesiology3', 0],
          ['Kinesiology2', 'Changed Programs3', 2],
          ['Kinesiology2', 'Earned Bachelors3', 0],
          ['Kinesiology2', 'Stop-out3', 12],

          //part 1
          ['Life Science', 'Life Science2', 0],
          ['Life Science', 'Changed Programs2', 0],
          ['Life Science', 'Earned Bachelors2', 0],
          ['Life Science', 'Stop-out2', 1],

          //part 2
          ['Life Science2', 'Life Science3', 0],
          ['Stop-out2', 'Life Science3', 1],
          ['Life Science2', 'Changed Programs3', 0],
          ['Life Science2', 'Earned Bachelors3', 0],
          ['Life Science2', 'Stop-out3', 0],

          //part 1
          ['Medical Lab Science', 'Medical Lab Science2', 1],
          ['Medical Lab Science', 'Changed Programs2', 0],
          ['Medical Lab Science', 'Earned Bachelors2', 0],
          ['Medical Lab Science', 'Stop-out2', 0],         
          
          //part 2
          ['Medical Lab Science2', 'Medical Lab Science3', 1],
          ['Medical Lab Science2', 'Changed Programs3', 0],
          ['Medical Lab Science2', 'Earned Bachelors3', 0],
          ['Medical Lab Science2', 'Stop-out3', 0],

        ],
  nodes: [{
            id: 'Biomedical Science',
            name: 'Biomedical Science',
            // colorIndex: 0
            color: '#7cb5ec'
        },
        {
            id: 'Forensic Biotechnology',
            name: 'Forensic Biotechnology',
            color: '#434348'
        }, {
            id: 'Forensic Science',
            name: 'Forensic Science',
            color: '#90ed7d'
        },

        {
            id: 'Health Science',
            name: 'Health Science',
            color: '#f7a35c'
        },
        {
            id: 'Kinesiology',
            name: 'Kinesiology',
            color: '#8085e9'
        },
        {
            id: 'Life Science',
            name: 'Life Science',
            color: ''
        },

        {
            id: 'Medical Lab Science',
            name: 'Medical Lab Science',
            color: '#f15c80'
        },

        {
            id: 'Biomedical Science2',
            name: 'Biomedical Science',
            color: '#7cb5ec'
        },
        {
            id: 'Forensic Biotechnology2',
            name: 'Forensic Biotechnology',
            color: '#434348'
        }, 
        {
            id: 'Forensic Science2',
            name: 'Forensic Science',
            color: '#90ed7d'
        }, 
        {
            id: 'Health Science2',
            name: 'Health Science',
            color: '#f7a35c'
        },
        {
            id: 'Kinesiology2',
            name: 'Kinesiology',
            color: '#8085e9'
        },

        {
            id: 'Life Science2',
            name: 'Life Science',
            color: ''
        },
        {
            id: 'Medical Lab Science2',
            name: 'Medical Lab Science',
            color: '#f15c80'
        },
        {
            id: 'Biomedical Science3',
            name: 'Biomedical Science',
            color: '#7cb5ec'
        },
        {
            id: 'Forensic Biotechnology3',
            name: 'Forensic Biotechnology',
            color: '#434348'
        }, 
        {
            id: 'Forensic Science3',
            name: 'Forensic Science',
            color: '#90ed7d'
        },
        {
            id: 'Health Science3',
            name: 'Health Science',
            color: '#f7a35c'
        },
        {
            id: 'Kinesiology3',
            name: 'Kinesiology',
            color: '#8085e9'
        },

        {
            id: 'Life Science3',
            name: 'Life Science',
            color: ''
        },
        {
            id: 'Medical Lab Science3',
            name: 'Medical Lab Science',
            color: '#f15c80'
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
