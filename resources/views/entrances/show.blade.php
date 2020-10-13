@extends('layouts.app')

@section('title', 'Ver detalles de entradas')

@section('content')


        <div class="row">
            <div class="card col-sm bg-light" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $entrance->price }}</h5>
                <h3 class="card-text">{{ $entrance->hourEntrance }}</h3>
                <form action="{{ route('entrances.destroy', $entrance->id) }}" method="post">
                <a class="btn btn-info" href="{{ route('entrances.show', $entrance->id) }}">Ver</a>
                 <a class="btn btn-info" href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>


                </div>
            </div>
        </div>

        <br>

@endsection