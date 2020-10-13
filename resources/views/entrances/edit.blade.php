@extends('layouts.app')
@section('title', 'Editar entradas')
@section('content')

    <div class="row">
        <div class="col-sm-10"><h1>Agregar entradas</h1></div>
        <div class="col-sm-2">
            <a href="{{ route('entrances.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

    <div class="jumbotron">
        <form method="post" action="{{ route('entrances.update', $entrance->id) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="">Precio:</label>
                <input class="form-control" type="text" name="price" id="" required maxlength="100">
            </div>
            <div>
                <label for="">Hora de entrada:</label>
                <textarea class="form-control" name="hourEntrance" id="" cols="30" rows="5"></textarea>
            </div>
        <br><br>

            <input class="btn btn-primary" type="submit" value="Guardar cambios">

        </form>
    </div>

@endsection