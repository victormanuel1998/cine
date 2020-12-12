<body>
    <div id="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

    var rooms = <?php echo json_encode($rooms) ?>;
    Highcharts.chart('container', {
        title: {
            text: 'Salas registradas en el sistema'
        },
        subtitle: {
            text: 'Grafica'
        },
        xAxis: {
            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        yAxis: {
            title: {
                text: 'Salas'
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
            name: 'Salas',
            data: rooms
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