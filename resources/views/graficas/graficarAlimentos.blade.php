<body>
    <div id="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

    var consumables = <?php echo json_encode($consumables) ?>;
    Highcharts.chart('container', {
        title: {
            text: 'Alimentos registrados en el sistema'
        },
        subtitle: {
            text: 'Grafica'
        },
        xAxis: {
            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        yAxis: {
            title: {
                text: 'Alimentos'
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
            name: 'Alimentos',
            data: consumables
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