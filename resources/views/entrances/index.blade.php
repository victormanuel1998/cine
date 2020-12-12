@extends('layouts.app')
 @section('title', 'Entradas')
 @section('content')
<div class="rom">
 <div class="col-sm-2"><a href="{{route('entrances.create') }}"><button  class="btn btn-primary">Agregar</button>
 </a>
 <a href="{{route('entrances.pdf')}}" class="btn btn-danger ml-auto">PDF</a>
 <a href ="/entrancesXLS"  class="btn btn-danger">XLS</a>
        <a href ="entrancesSCSV" class="btn btn-dark">CSV</a>
        <a class="btn btn-secondary" href="{{ route('xmlentrances')}}" target="_blank">xml</a>
       <!--aqui sera lo de functions.pdf que lleva el metodo name-->
        <a href="{{route('home')}}" class="btn btn-danger">Inicio</a>
        <a href="{{route('entrances.grafica')}}" class="btn btn-warning">Graficar</a>
 </div>
 <div class="col-sm-10"><h1>Entradas</h1>
 </div>
 
 <table class="table table-striped table-bordered table-condensed table-hover">
  <thead>
      <tr>
          <td>price</td>
          <td>quantity</td>
          <td>opciones</td>
         
      </tr>
  </thead>
  @foreach ($entrances as $cat)
  <tr>
      <td>{{$cat->price}}</td>
  <td>{{$cat->hourEntrance}}</td>

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
{{ $entrances->links() }}
@endsection
