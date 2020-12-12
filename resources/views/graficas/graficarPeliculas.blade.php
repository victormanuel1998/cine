<body>
    <a href="{{route('home')}}" class="btn btn-danger">Inicio</a>
    <div id="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

    var movies = <?php echo json_encode($movies) ?>;
    Highcharts.chart('container', {
        chart: {
        type: 'bar'
    },
        title: {
            text: 'Peliculas registradas en el sistema'
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
                text: 'Nuevas Peliculas'
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
            name: 'Nuevas Peliculas',
            data: movies
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

