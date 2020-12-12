<body>
    <div id="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

    var entrances = <?php echo json_encode($entrances) ?>;
    Highcharts.chart('container', {
        chart: {
        type: 'bar'
    },
        title: {
            text: 'Entradas registradas en el sistema'
        },
        subtitle: {
            text: 'Grafica'
        },
        xAxis: {
            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        yAxis: {
            title: {
                text: 'Entradas'
            }
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },

        series: [{
            name: 'Entradas',
            data: entrances
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    } 
                }
            }]
        }
    });
</script>