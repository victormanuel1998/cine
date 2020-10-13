@extends('layouts.app')
@section('title', 'Editar película')
@section('content')

    <div class="row">
        <div class="col-sm-10"><h1>Agregar película</h1></div>
        <div class="col-sm-2">
            <a href="{{ route('movies.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

    <div class="jumbotron">
        <form method="post" action="{{ route('movies.update', $movie->id) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="">Película:</label>
                <input class="form-control" type="text" value="{{ $movie->name }}" name="name" id="" required maxlength="100">
            </div>
            <div>
                <label for="">Sinopsis:</label>
                <textarea class="form-control" name="synopsis" id="" cols="30" rows="5">{{ $movie->synopsis }}</textarea>
            </div>
            <div>
                <label for="">Director:</label>
                <input class="form-control" type="text" value="{{ $movie->director }}" name="director" id="" required maxlength="100">
            </div>
            <div>
                <label for="">Género:</label>
                <select class="form-control" name="genre" id="" required>
                    <option value="{{ $movie->genre }}">{{ $movie->genre }}</option>
                    <option value="Ciencia Ficción">Ciencia Ficción</option>
                    <option value="Acción">Acción</option>
                    <option value="Terror">Terror</option>
                    <option value="Infantil">Infantil</option>
                    <option value="Romance">Romance</option>
                </select>
            </div>
            <div>
                <label for="">Duración:</label>
                <input class="form-control" type="text" value="{{ $movie->duration }}" name="duration" id="" required maxlength="30">
            </div>
            <div>
                <label for="">Disponibilidad:</label>
                <select class="form-control" name="available" id="" required>
                    <option value="{{ $movie->available }}">{{ $movie->available }}</option>
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select>
            </div>

            <br><br>

            <input class="btn btn-primary" type="submit" value="Guardar cambios">

        </form>
    </div>

@endsection
