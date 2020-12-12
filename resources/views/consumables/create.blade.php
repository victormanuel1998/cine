@extends('layouts.app')
@section('title', 'Agregar articulos')
@section('content')

     <div class="row">
        <div class="col-sm-10"><h1>Agregar articulos<h1></div>
        <div class="col-sm-2">
            <a href="{{ route('consumablesindex') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <div class="col-6">
        <form method="post" action="{{ route('consumables.store') }}">
            @csrf

            <div>
                <label for="">ARTICULO:</label>
                <input class="form-control" type="text" name="name" id="" required maxlength="100">
            </div>
            <div>
                <label for="">PRECIO:</label>
                <input class="form-control" type="text" name="price" id="" required maxlength="100">
            </div>
            <div>
                <label for="">CANTIDAD:</label>
                <input class="form-control" type="number" name="quantity" id="" required maxlength="100">
            </div>
            <br><br>

            <input class="btn btn-success" type="submit" value="Guardar">

        </form>
    </div>

@endsection
