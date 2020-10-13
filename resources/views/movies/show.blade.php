@extends('layouts.app')

@section('title', 'Ver detalles de película')

@section('content')


        <div class="row">
            <div class="card col-sm bg-light" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->name }}</h5>
                    <h3 class="card-text">{{ $movie->director }}</h3>
                    <p class="card-text">{{ $movie->synopsis }}</p>
                    <p class="card-text text-muted">{{ $movie->duration }}</p>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                        <a class="btn btn-secondary" href="{{ route('movies.index', $movie->id) }}">Volver</a>
                        <a class="btn btn-secondary" href="{{ route('movies.edit', $movie->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>


                </div>
            </div>
        </div>

        <br>

@endsection


