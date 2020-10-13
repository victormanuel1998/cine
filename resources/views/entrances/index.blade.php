@extends('layouts.app')
 @section('title', 'Entradas')
 @section('content')
<div class="rom">
 <div class="col-sm-2"><a href="{{route('entrances.create') }}"><button  class="btn btn-primary">Agregar</button>
 </a>
 </div>
 <div class="col-sm-10"><h1>Entradas</h1>
 </div>
 
 @forelse($entrances as $entrance)
 <div class="row">
<div class="card col-sm bg-light" style="...">
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
@empty
    <div><h3>No hay registro de entradas</h3></div>
@endforelse

{{ $entrances->links() }}
@endsection
