<template>
    <div class="container">
        <highcharts :options="chartOptions"></highcharts>
    </div>
</template>

<script>
 export default {
    props: ['title', 'values'],

    data() {
        return {
            title: '',
            points: this.values,
            chartType: 'Spline',
            seriesColor: '#6fcd98',
            colorInputIsSupported: null,
            chartOptions: {
            chart: {
                type: 'spline'
            },
            title: {
                text: this.title
            },
            series: [{
                data: this.values,
                color: '#6fcd98'
            }]
            }
        }
    },

    mounted() {
        console.log('Component mounted.')
    }
}

</script>
