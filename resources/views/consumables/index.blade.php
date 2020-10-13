@extends('layouts.app')
@section('title', 'consumables')
@section('content')

<div class="row">
    <div class="col-sm-2">
        <a href="{{ route('consumables.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>
    <div class="col-sm-10"><h1>compras de registradas</h1></div>
</div>

@forelse($consumables as $consumable)
    <div class="row">
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $consumable->name }}</h5>
                <h3 class="card-text">{{ $consumable->price }}</h3>
                <p class="card-text">{{ $consumable->quantity }}</p>
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
@empty
    <div><h3>NO HAY REGISTROS </h3></div>
@endforelse

{{ $consumables->links() }}

@endsection
