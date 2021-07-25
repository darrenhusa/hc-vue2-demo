<template>
    <div class="container">
        <highcharts :options="chartOptions"></highcharts>
        <button id="button" class="bg-gray-200 p-2">Export chart</button>
        <!-- <button id="button" v-on:click="exportChart" class="bg-gray-200 p-2">Export chart</button> -->
    </div>
</template>

<script>
import 
 export default {
    props: ['values', 'title'],

    data() {
        return {
            chartOptions: {
                title: {
                text: this.title
                },
                series: [{
                data: this.values
                }]
            }
        }
    },

    methods: {
        exportChart() {
            alert('export chart!');
        }
    },

    mounted() {
        console.log('Component mounted.');

        document.getElementById('button').addEventListener('click', () => {
            chart.exportChart(
            {   type: 'application/pdf',
                filename: 'my-pdf'
            });
        });
    }
}

</script>
