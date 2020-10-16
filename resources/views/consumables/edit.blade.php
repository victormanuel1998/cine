@extends('layouts.app')
@section('title', 'editar articulos')
@section('content')

     <div class="row">
        <div class="col-sm-10"><h1>Agregar articulos<h1></div>
        <div class="col-sm-2">
            <a href="{{ route('consumables.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <div class="jumbotron">
        <form method="post" action="{{ route('consumables.update', $consumable->id) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="">ARTICULO:</label>
                <input class="form-control" type="text"value="{{ $consumable->name }}" name="name" id="" required maxlength="100">
            </div>
            <div>
                <label for="">PRECIO:</label>
                <input class="form-control" type="text"value="{{ $consumable->price }}" name="price" id="" required maxlength="100">
            </div>
            <div>
                <label for="">CANTIDAD:</label>
                <input class="form-control" type="number"value="{{ $consumable->quantity }}" name="quantity" id="" required maxlength="100">
            </div>
            <br><br>


            <input class="btn btn-primary" type="submit" value="Guardar cambios">

        </form>
    </div>

@endsection