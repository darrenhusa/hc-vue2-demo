require('./bootstrap');

// window.Vue = require('vue').default;
import Vue from 'vue'
// import Highcharts from 'highcharts'
import HighchartsVue from 'highcharts-vue'

Vue.use(HighchartsVue)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('line-chart', require('./components/LineChart.vue').default);
Vue.component('basic-line-chart', require('./components/BasicLineChart.vue').default);
Vue.component('column-chart', require('./components/ColumnChart.vue').default);
Vue.component('stacked-column-chart', require('./components/StackedColumnChart.vue').default);
Vue.component('stacked-column-with-data-label-percents-chart', require('./components/StackedColumnWithPercentsAsDataLabelsChart.vue').default);
Vue.component('stacked-percentage-column-chart', require('./components/StackedPercentageColumnChart.vue').default);

Vue.component('sankey-chart', require('./components/SankeyChart.vue').default);
Vue.component('hierarchical-treemap', require('./components/HierarchicalTreemap.vue').default);
Vue.component('table-with-sparklines', require('./components/TableWithSparklines.vue').default);
// Vue.component('treemap', require('./components/Treemap.vue').default);

// Vue.component('pie-chart', require('./components/PieChart.vue').default);
// Vue.component('combo-chart', require('./components/ComboChart.vue').default);

// Vue.component('stacked-column-chart', require('./components/hc-wrapper-versions/StackedColumnChart.vue').default);

// Vue.component('chart-demo', require('./components/ChartDemo.vue').default);


const app = new Vue({
    el: '#app',

    // data() {
    //     return {
    //         chartOptions: {
    //             series: [{
    //             data: [1,2,3] // sample data
    //             }]
    //         }
    //     }
    // }
});

// new Vue({
//     data() {
//       return {
//         chartOptions: {
//           series: [{
//             data: [1,2,3] // sample data
//           }]
//         }
//       }
//     }
//   })
  
