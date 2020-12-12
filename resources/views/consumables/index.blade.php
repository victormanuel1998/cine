@extends('layouts.app')
@section('title', 'consumables')
@section('content')

<div class="row">
    <div class="col-sm-2">
        <a href="{{ route('consumables.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
        <a href="{{route('consumables.pdf')}}" class="btn btn-danger ml-auto">PDF</a>
        <a href ="/consumablesXLS"  class="btn btn-danger">XLS</a>
        <a href ="consumablesCSV" class="btn btn-dark">CSV</a>
        <a class="btn btn-secondary" href="{{ route('xmlconsumables')}}" target="_blank">xml</a>
        <a href="{{route('consumables.grafica')}}" class="btn btn-warning">Graficar</a>
       <!--aqui sera lo de functions.pdf que lleva el metodo name-->
        <a href="{{route('home')}}" class="btn btn-danger">Inicio</a>
    </div>
    </div>
    <div class="col-sm-10"><h1>compras de registradas</h1></div>
</div>
<table class="table table-striped table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <td>name</td>
            <td>price</td>
            <td>quantity</td>
            <td>opciones</td>
            
           
        </tr>
    </thead>
    @foreach ($consumables as $cat)
    <tr>
        <td>{{$cat->name}}</td>
        <td>{{$cat->price}}</td>
    <td>{{$cat->quantity}}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Acciones">
            <a href="{{route('consumables.show', $cat->id)}}" class="btn btn-info btn-sm">
                <i class="fa fa-eye">Ver</i>
            </a>
            <a href="{{route('consumables.edit', $cat->id)}}" class="btn btn-success btn-sm">
                <i class="fa fa-edit">Editar</i>
            </a>
            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$cat->id}}"
                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                <i class="fa fa-trash">Eliminar</i>
            </button>
            <form action="{{route('consumables.destroy', $cat->id)}}" id="delete_{{$cat->id}}"
                method="post" enctype="multipart/form-data" hidden>
                @csrf
                @method('DELETE')
            </form>
    </tr>
    @endforeach
</table>
</body>
</html>

<!--@forelse($consumables as $consumable)
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
-->



@endsection
