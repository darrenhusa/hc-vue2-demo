<template>
    <div>
        <div id="container" class="container"></div>
    </div>
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
    // props : {
    //   series : {
    //     // type: Array,
    //     type: Object,
    //     required: true
    //   }
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
      //       name: this.series.data[i].label,
      //       data: this.series.data[i].values
      //   });
      // }

      // alert(seriesTemp);
      // console.log(seriesTemp);

      this.target = Highcharts.chart(this.$el, {

    title: {
        text: 'Highcharts Sankey Diagram'
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. {point.from} to {point.to}, {point.weight}.'
        }
    },
    series: [{
        keys: ['from', 'to', 'weight'],
        data: [
           ['Accounting', 'Accounting2', 2],
['Accounting', 'Health Science2', 1],

['Biomedical Science', 'Biomedical Science2', 7],
['Biomedical Science', 'General Studies2', 1],
['Biomedical Science', 'Psychology2', 1],
['Biomedical Science', 'Stop-out2', 4],

['Business Management', 'Business Management2', 21],
['Business Management', 'Stop-out2', 4],
['Business Management', 'Psychology2', 1],
['Business Management', 'Digital & Studio Arts2', 1],

['Criminal Justice', 'Criminal Justice2', 9],
['Criminal Justice', 'Business Management2', 2],
['Criminal Justice', 'Stop-out2', 6],

['Digital & Studio Arts', 'Digital & Studio Arts2', 2],
['Digital & Studio Arts', 'Stop-out2', 8],

['Education', 'Education2', 5],
['Education', 'General Studies2', 2],
['Education', 'Human Services2', 1],
['Education', 'Business Management2', 1],

['English', 'English2', 3],
['English', 'Education2', 1],

['Forensic Science', 'Forensic Science2', 1],
['Forensic Science', 'Stop-out2', 4],

['General Studies', 'General Studies2', 8],
['General Studies', 'Education2', 1],
['General Studies', 'Stop-out2', 6],

['Health Science', 'Health Science2', 5],
['Health Science', 'Stop-out2', 1],

['Human Services', 'Human Services2', 4],

['Kinesiology', 'Kinesiology2', 6],
['Kinesiology', 'Digital & Studio Arts2', 1],
['Kinesiology', 'Psychology2', 1],
['Kinesiology', 'Stop-out2', 2],

['Medical Lab Science', 'Criminal Justice2', 1],

['Psychology', 'Psychology2', 5],
['Psychology', 'Stop-out2', 4],

['Accounting2', 'Accounting3', 1],
['Accounting2', 'Health Science3', 1],
['Accounting2', 'Stop-out3', 1],

['Biomedical Science2', 'Biomedical Science3', 5],
['Biomedical Science2', 'Psychology3', 1],
['Biomedical Science2', 'Stop-out3', 7],

['Business Management2', 'Business Management3', 13],
['Business Management2', 'Digital & Studio Arts3', 1],
['Business Management2', 'Psychology3', 2],
['Business Management2', 'Stop-out3', 11],

['Criminal Justice2', 'Criminal Justice3', 7],
['Criminal Justice2', 'Business Management3', 1],
['Criminal Justice2', 'Stop-out3', 9],

['Digital & Studio Arts2', 'Digital & Studio Arts3', 2],
['Digital & Studio Arts2', 'Stop-out3', 8],

['Education2', 'Education3', 3],
['Education2', 'Business Management3', 1],
['Education2', 'Psychology3', 1],
['Education2', 'Stop-out3', 4],

['English2', 'English3', 2],
['English2', 'Stop-out3', 2],

['Forensic Science2', 'Forensic Science3', 1],
['Forensic Science2', 'Stop-out3', 4],

['General Studies2', 'General Studies3', 2],
['General Studies2', 'Human Services3', 1],
['General Studies2', 'Stop-out3', 12],

['Health Science2', 'Health Science3', 2],
['Health Science2', 'Stop-out3', 4],

['Human Services2', 'Human Services3', 1],
['Human Services2', 'Stop-out3', 3],

['Kinesiology2', 'Kinesiology3', 4],
['Kinesiology2', 'Digital & Studio Arts3', 1],
['Kinesiology2', 'Stop-out3', 5],

['Medical Lab Science2', 'Stop-out3', 1],

['Psychology2', 'Psychology3', 2],
['Psychology2', 'Business Management3', 1],
['Psychology2', 'Human Services3', 1],
['Psychology2', 'Stop-out3', 5],

],
        type: 'sankey',
        name: 'Sankey demo series'
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
