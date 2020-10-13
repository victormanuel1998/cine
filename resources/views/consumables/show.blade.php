@extends('layouts.app')
@section('title', 'ver articulos')
@section('content')

    <div class="row">
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $consumable->name }}</h5>
                <h3 class="card-text">{{ $consumable->price }}</h3>
                <p class="card-text">{{ $consumable->quanty }}</p>
                <form action="{{ route('consumables.destroy', $consumable->id) }}" method="post">
                    <a class="btn btn-secondary" href="{{ route('consumables.show', $consumable->id) }}">Ver</a>
                    <a class="btn btn-secondary" href="{{ route('consumables.edit', $consumable->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    <br>
@endsection