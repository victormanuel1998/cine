@extends('layouts.app')

@section('title', 'Agregar funciones')

@section('content')


    <div class="row">
        <div class="col-sm-10"><h1>Agregar funciones</h1></div>
        <div class="col-sm-2">
            <a href="{{ route('functions.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <div class="jumbotron">
        <form action="{{ route('functions.store') }}" enctype="multipart/form-data" method="POST">
        @csrf 
            <div>
                <label for="start">Inicio:</label>
                <input class="form-control" type="datetime-local" name="start" id="" required >
                </div>
                <div>
                <label for="end">Termina:</label>
                <input class="form-control" type="datetime-local" name="end" id="" required >
                </div>
                <div>
                    <label for="available">Disponible</label>
                    <select class="form-control" name="available" id="" required>
                        <option value="">Seleccione un tipo</option>
                        <option value="0">Si</option>
                        <option value="1">No</option>
                    </select>
                <div>
                    <label for="type">Tipo:</label>
                    <select class="form-control" name="type" id="" required>
                        <option value="0">Seleccione un tipo</option>
                        <option value="mañana">mañana</option>
                        <option value="tarde">tarde</option>
                        <option value="noche">noche</option>
                    </select>
                </div>
                <div>
                    <!-- <input class="btn btn-primary" type="submit" value="Guardar"> -->
                    <button class="btn btn-primary" >Guardar</button>
                </div>
        </form>
    </div>

@endsection

