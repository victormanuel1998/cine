@extends('layouts.app')
 @section('title', 'Salas')
 @section('content')
<div class="rom">
 <div class="col-sm-2"><a href="{{route('rooms.create') }}"><button  class="btn btn-primary">Agregar</button>
 </a>
 </div>
 <div class="col-sm-10"><h1>Salas registradas</h1>
 </div>
 
 

@forelse($rooms as $room)
 <div class="row">
<div class="card col-sm bg-light" style="...">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $room->chairs }}</h5>
    <h3 class="card-text">{{ $room->location }}</h3>
    <p class="card-text">{{ $room->capacity }}</p>
    <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
        <a class="btn btn-info" href="{{ route('rooms.show', $room->id) }}">Ver</a>
        <a class="btn btn-info" href="{{ route('rooms.edit', $room->id) }}">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    </div>
</div>
</div>
<br>
@empty
    <div><h3>No hay registro de salas</h3></div>
@endforelse

{{ $rooms->links() }}
@endsection
