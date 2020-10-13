@extends('layouts.app')
@section('title', 'funciones')
@section('content')

<div class="row">
    <div class="col-sm-2">
        <a href="{{ route('functions.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>
    <div class="col-sm-10"><h1>fUNSIONES RESG</h1></div>
</div>

@forelse($functions as $functions)
    <div class="row">
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $functions->start }}</h5>
                <h3 class="card-text">{{ $functions->end }}</h3>
                <p class="card-text">{{ $functions->available }}</p>
                <p class="card-text text-muted">{{ $functions->type }}</p>
                <form action="{{ route('functions.destroy', $functions->id) }}" method="post">
                    <a class="btn btn-secondary" href="{{ route('functions.show', $functions->id) }}">Ver</a>
                    <a class="btn btn-secondary" href="{{ route('functions.edit', $functions->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    <br>
@empty
    <div><h3>NO HAY FUNCIONES DISPONIBLES</h3></div>
@endforelse

 

@endsection
