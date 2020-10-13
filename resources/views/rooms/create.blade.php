@extends('layouts.app')

@section('title', 'Agregar salas')

@section('content')


    <div class="row">
        <div class="col-sm-10"><h1>Agregar salas</h1></div>
        <div class="col-sm-2">
            <a href="{{ route('rooms.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <div class="jumbotron">
        <form method="post" action="{{ route('rooms.store') }}">
            @csrf

            <div>
                <label for="">sillas:</label>
                <input class="form-control" type="text" name="chairs" id="" required maxlength="100">
            </div>
            <div>
                <label for="">ubicacion:</label>
                <textarea class="form-control" name="location" id="" cols="30" rows="5"></textarea>
            </div>
            <div>
                <label for="">capacidad:</label>
                <input class="form-control" type="text" name="capacity" id="" required maxlength="100">
            </div>
        
            <br><br>

            <input class="btn btn-primary" type="submit" value="Guardar">

        </form>
    </div>

@endsection