@extends('layouts.app')

@section('title', 'Ver detalles de FUNCIONES')

@section('content')


        <div class="row">
            <div class="card col-sm bg-light" style="width: 18rem;">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h5 class="card-title">{{ $function->start }}</h5>
                    <h3 class="card-text">{{ $function->end }}</h3>
                    <p class="card-text">{{ $function->available }}</p>
                    <p class="card-text text-muted">{{ $function->type }}</p>
                    
                    <a class="btn btn-secondary" href="{{ route('functions.index', $function->id) }}">Volver</a>
                        <a class="btn btn-secondary" href="{{ route('functions.edit', $function->id) }}">Editar</a>
                    <form action="{{ route('functions.destroy', $function->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </div>
            </div>
        </div>

        <br>

@endsection
