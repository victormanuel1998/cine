@extends('layouts.app')
 @section('title', 'Salas')
 @section('content')
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div class="rom">
 <div class="col-sm-2"><a href="{{route('rooms.create') }}"><button  class="btn btn-primary">Agregar</button>
 </a>
 <a href="{{route('rooms.pdf')}}" class="btn btn-danger ml-auto">PDF</a>
 <a href ="/roomsXLS"  class="btn btn-danger">XLS</a>
 <a href ="roomsCSV" class="btn btn-dark">CSV</a>
 <a class="btn btn-secondary" href="{{ route('xmlrooms')}}" target="_blank">xml</a>
 <a href="{{route('rooms.grafica')}}" class="btn btn-warning">Graficar</a>
<!--aqui sera lo de functions.pdf que lleva el metodo name-->
 <a href="{{route('home')}}" class="btn btn-danger">Inicio</a>
</div>
 </div>
 <div class="col-sm-10"><h1>Salas registradas</h1>
 </div>
 
 
 <table class="table table-striped table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>chairs</td>
            <td>location</td>
            <td>capacity</td>
            <td>opciones</td>
           
        </tr>
    </thead>
    @foreach ($rooms as $cat)
    <tr>
    <td>{{$cat->id}}</td>
        <td>{{$cat->chairs}}</td>
        <td>{{$cat->location}}</td>
    <td>{{$cat->capacity}}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Acciones">
            <a href="{{route('rooms.show', $cat->id)}}" class="btn btn-info btn-sm">
                <i class="fa fa-eye">Ver</i>
            </a>
            <a href="{{route('rooms.edit', $cat->id)}}" class="btn btn-success btn-sm">
                <i class="fa fa-edit">Editar</i>
            </a>
            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$cat->id}}"
                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                <i class="fa fa-trash">Eliminar</i>
            </button>
            <form action="{{route('rooms.destroy', $cat->id)}}" id="delete_{{$cat->id}}"
                method="post" enctype="multipart/form-data" hidden>
                @csrf
                @method('DELETE')
            </form>
    </td>
    </tr>
    @endforeach
</table>
<!--@forelse($rooms as $room)
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
-->
{{ $rooms->links() }}
@endsection
