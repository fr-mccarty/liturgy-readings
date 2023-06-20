@props([
    'data' => 'data',
])

<!-- Styles -->
<style>
    #chartdiv {
        width: 100%;
        max-width: 100%;
        height:90vh;
    }
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/plugins/forceDirected.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>


<div class="-mt-14"
     x-data="{
            //https://www.amcharts.com/docs/v4/chart-types/force-directed/

            //separated by commas
            data: @entangle('data'),
            init() {
                //not separated by commas
                am4core.useTheme(am4themes_animated)

                var chart = am4core.create('chartdiv', am4plugins_forceDirected.ForceDirectedTree)
                chart.zoomable = true
                var series = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())

                series.dataFields.value = 'value'
                series.dataFields.name = 'name'
                series.dataFields.children = 'children'
                series.links.template.distance = 2 //original 2
                series.centerStrength = 1.2 //default 1.2 ***
                series.minRadius = am4core.percent(.8)
                series.nodes.template.label.text = '{name}'
                series.nodes.template.tooltipText = '{label}';
                series.nodes.template.label.fontSize = 9

                // The value determines how big a bubble (node) will be in comparison to other bubbles.
                console.log(this.data.children)
                chart.data = [this.data]

{{--                this.$watch('data', () => {--}}
{{--                    console.log(this.data)--}}
{{--                    chart.dispose();--}}
{{--                    chart.data = [this.data]--}}
{{--                })--}}
            },

        }">
    <div id="chartdiv"></div>
</div>
