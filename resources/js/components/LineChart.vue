<template>
    <div class="container">
        <highcharts :options="chartOptions"></highcharts>
    </div>
</template>

<script>
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

    mounted() {
        console.log('Component mounted.')
    }
}

</script>
