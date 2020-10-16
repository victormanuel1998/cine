<div>

<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>


<div id="myCarousel" class="carousel slide carousel-fade col-12" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/1.jpg') }}" style="height: 768px">
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Proyecto Géminis</h1>
                    <p>Henry Bogan, un asesino a sueldo, pretende retirarse porque se siente viejo. Sin embargo, hay alguien que no está dispuesto a permitírselo porque tiene la misión de matarlo: un clon suyo más joven, más rápido y más fuerte.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Compra tu entrada</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/2.jpg') }}" alt="" style="height: 768px">
            <div class="container">
                <div class="carousel-caption">
                    <h1> Pantera Negra</h1>
                    <p>Después de morir su padre, T'Challa regresa a su nación, Wakanda. Una vez allí, descubre que tiene un nuevo y terrible enemigo, y T'Challa asume la personalidad de Pantera Negra para salvar no solo al reino de Wakanda, sino a toda la humanidad.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/3.jpg') }}" style="height: 768px">
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>sonic</h1>
                    <p>Sonic intenta atravesar las complejidades de la vida en la Tierra con su nuevo mejor amigo, un humano llamado Tom Wachowski. Deberán unir sus fuerzas para evitar que el malvado Dr. Robotnik capture a Sonic y use sus poderes para dominar el mundo.
                    </p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

</div>
