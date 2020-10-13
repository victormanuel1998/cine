@extends('layouts.app')

@section('title', 'Ver detalles de salas')

@section('content')


        <div class="row">
            <div class="card col-sm bg-light" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $room->chairs }}</h5>
                    <h3 class="card-text">{{ $room->location }}</h3>
                    <p class="card-text">{{ $room->capacity }}</p>
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
                        <a class="btn btn-secondary" href="{{ route('rooms.index', $room->id) }}">Volver</a>
                        <a class="btn btn-secondary" href="{{ route('rooms.edit', $room->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>


                </div>
            </div>
        </div>

        <br>

@endsection
