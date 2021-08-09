<template>
    <div>
        <div id="container" v-bind:style="styleObject"></div>
    </div>
</template>

<script>
// var Highcharts = require('highcharts');
import Highcharts from 'highcharts';
import Exporting from 'highcharts/modules/exporting';
Exporting(Highcharts);

export default {
    name : "BasicLineChart",
    props : {
      series : {
        // type: Array,
        type: Object,
        required: true
      },
      showDataLabels : {
        type: Boolean,
        default: false
      },
     
      inputPlotWidth: {
        type: Number,
        default: 300
      },
      inputPlotHeight: {
        type: Number,
        default: 300
      }
	},
  	data : function() {
      return {
        // target: 'container'
        target: undefined,
        // width: '300px',
        // height: '300px',
        styleObject: {
          width: this.inputPlotWidth,
          height: this.inputPlotHeight,
        },
      }
    },
    mounted : function() {

       (function(H) {
    H.wrap(H.Chart.prototype, 'setChartSize', function(proceed, skipAxes) {
      var chart = this,
        inverted = chart.inverted,
        renderer = chart.renderer,
        chartWidth = chart.chartWidth,
        chartHeight = chart.chartHeight,
        optionsChart = chart.options.chart,
        spacing = chart.spacing,
        clipOffset = chart.clipOffset,
        clipX,
        clipY,
        plotLeft,
        plotTop,
        plotWidth,
        plotHeight,
        plotBorderWidth,
        plotAreaWidth = chart.options.chart.plotAreaWidth,
        plotAreaHeight = chart.options.chart.plotAreaHeight;

      if (plotAreaWidth) {
        chart.plotWidth = plotWidth = plotAreaWidth;
        chart.plotLeft = plotLeft = Math.round((chartWidth - plotAreaWidth) / 2);
      } else {
        chart.plotLeft = plotLeft = Math.round(chart.plotLeft);
        chart.plotWidth = plotWidth = Math.max(0, Math.round(chartWidth - plotLeft - chart.marginRight));
      }
      if (plotAreaHeight) {
        chart.plotTop = plotTop = Math.round((chartHeight - plotAreaHeight) / 2);
        chart.plotHeight = plotHeight = plotAreaHeight;
      } else {
        chart.plotTop = plotTop = Math.round(chart.plotTop);
        chart.plotHeight = plotHeight = Math.max(0, Math.round(chartHeight - plotTop - chart.marginBottom));
      }

      chart.plotSizeX = inverted ? plotHeight : plotWidth;
      chart.plotSizeY = inverted ? plotWidth : plotHeight;

      chart.plotBorderWidth = optionsChart.plotBorderWidth || 0;

      // Set boxes used for alignment
      chart.spacingBox = renderer.spacingBox = {
        x: spacing[3],
        y: spacing[0],
        width: chartWidth - spacing[3] - spacing[1],
        height: chartHeight - spacing[0] - spacing[2]
      };
      chart.plotBox = renderer.plotBox = {
        x: plotLeft,
        y: plotTop,
        width: plotWidth,
        height: plotHeight
      };

      plotBorderWidth = 2 * Math.floor(chart.plotBorderWidth / 2);
      clipX = Math.ceil(Math.max(plotBorderWidth, clipOffset[3]) / 2);
      clipY = Math.ceil(Math.max(plotBorderWidth, clipOffset[0]) / 2);
      chart.clipBox = {
        x: clipX,
        y: clipY,
        width: Math.floor(chart.plotSizeX - Math.max(plotBorderWidth, clipOffset[1]) / 2 - clipX),
        height: Math.max(0, Math.floor(chart.plotSizeY - Math.max(plotBorderWidth, clipOffset[2]) / 2 - clipY))
      };

      if (!skipAxes) {
        Highcharts.each(chart.axes, function(axis) {
          axis.setAxisSize();
          axis.setAxisTranslation();
        });
      }
    });
  }(Highcharts));

      // console.log(this.series);
      // console.log(this.series.title);

      // see https://stackoverflow.com/questions/50144557/how-to-add-data-to-chart-js-with-a-for-loop/50144700
      const seriesTemp = [];
      const number = this.series.data.length

      for(let i=0; i<number; i++){
        seriesTemp.push({
            name: this.series.data[i].label,
            data: this.series.data[i].values
        });
      }

      // alert(seriesTemp);
      // console.log(seriesTemp);

      this.target = Highcharts.chart(this.$el, {
        // chart: {
        //   plotAreaWidth: this.inputPlotWidth,
        //   plotAreaHeight: this.inputPlotHeight
        // },
        
        title: {
          text: this.series.title,
          x: -20 //center
        },
        subtitle: {
          text: this.series.subtitle,
          x: -20
        },
        xAxis: {
          categories: this.series.categories
        },
        yAxis: {
          title: {
          text: this.series.y_axis
        },
      
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      }, // end yAxis

      plotOptions: {
          line: {
              dataLabels: {
                  enabled: this.showDataLabels
              },
              enableMouseTracking: false
          }
        },

      tooltip: {
        valueSuffix: '°C'
      },

      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
  	        borderWidth: 0
      },

        series: seriesTemp,
        // for loop generates code of the form below dynamically!
        // [
        //   {
        //     name: this.series.data[0].label,
        //     data: this.series.data[0].values
        //   },
        //   etc. etc.
        credits: {
          enabled: false
        },
    });
  },
//   beforeDestroy: function() {
//     this.target.destroy();
//   },
} // end export default

</script>
