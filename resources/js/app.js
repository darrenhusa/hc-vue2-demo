require('./bootstrap');

// window.Vue = require('vue').default;
import Vue from 'vue'
// import Highcharts from 'highcharts'
import HighchartsVue from 'highcharts-vue'

Vue.use(HighchartsVue)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('line-chart', require('./components/LineChart.vue').default);
Vue.component('column-chart', require('./components/ColumnChart.vue').default);

Vue.component('chart-demo', require('./components/ChartDemo.vue').default);


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
  
