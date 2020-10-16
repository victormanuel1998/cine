@extends('layouts.app')


<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



@section('content')

    <div class="col-12">
        @include('layouts.carousel')
    </div>

    </div>
    <div class="row">

        <div class="col-1"></div>

        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"></strong>
                    <h3 class="mb-0 text-uppercase">Gran muralla </h3>

                    <p class="mb-auto">Encarcelado dentro de la Gran Muralla china, 
                        un guerrero mercenario une fuerzas con un ejército 
                        de élite para luchar contra un ataque de monstruos saqueadores. ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/4.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 text-uppercase">Y cómo es él?</h3>

                    <p class="mb-auto">¿Y cómo es él? es una próxima película mexicana
                        de comedia romántica dirigida por Ariel Winograd. El título 
                        de la película está inspirado en la canción del mismo nombre 
                        interpretada por José Luis Perales, ​
                         y también es una adaptación de la película coreana Driving with my Wife's Lover. ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/5.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>

        <div class="col-1"></div>

    </div>


    <!-- Agregar JavaScript -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@endsection
