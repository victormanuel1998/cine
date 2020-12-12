@extends('layouts.app')
@section('title', 'funciones')
@section('content')

<div class="row">
    <div class="col-sm-6">
        <a href="{{ route('functions.create') }}">
            <button class="btn btn-success">Agregar</button>
        </a>
        <a href="{{route('functions.pdf')}}" class="btn btn-danger ml-auto">PDF</a>
        <a href ="/functionsXLS"  class="btn btn-danger">XLS</a>
        <a href ="functionsCSV" class="btn btn-dark">CSV</a>
        <a class="btn btn-secondary" href="{{ route('xmlfunctions')}}" target="_blank">xml</a>
       <!--aqui sera lo de functions.pdf que lleva el metodo name-->
        <a href="{{route('home')}}" class="btn btn-danger">Inicio</a>
        <a href="{{route('functions.grafica')}}" class="btn btn-warning">Graficar</a>
    </div>
</div>
<h2 style="text-align: center;">Funciones Registradas</h2>

<table class="table table-striped table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <td>Start</td>
            <td>end</td>
            <td>available</td>
            <td>type</td>
            <td>Opciones</td>
        </tr>
    </thead>
    @foreach ($functions as $cat)
    <tr>
        <td>{{$cat->start}}</td>
        <td>{{$cat->end}}</td>
    <td>{{$cat->available}}</td>
    <td>{{$cat->type}}</td>
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
</body>
</html>
<!--@forelse($functions as $functions)
    <div class="row">
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $functions->start }}</h5>
                <h3 class="card-text">{{ $functions->end }}</h3>
                <p class="card-text">{{ $functions->available }}</p>
                <p class="card-text text-muted">{{ $functions->type }}</p>
                <form action="{{ route('functions.destroy', $functions->id) }}" method="post">
                    <a class="btn btn-secondary" href="{{ route('functions.show', $functions->id) }}">Ver</a>
                    <a class="btn btn-secondary" href="{{ route('functions.edit', $functions->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    <br>
@empty
    <div><h3>NO HAY FUNCIONES DISPONIBLES</h3></div>
@endforelse
 -->

@endsection
