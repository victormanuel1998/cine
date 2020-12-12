<body>
    <div id="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

    var premieres = <?php echo json_encode($premieres) ?>;
    Highcharts.chart('container', {
        title: {
            text: 'Funciones registradas en el sistema'
        },
        subtitle: {
            text: 'Grafica'
        },
        xAxis: {
            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Funciones'
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
            name: 'Funciones',
            data: premieres
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