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
        <form method="post" action="{{ route('functions.update',$function->id) }}">
            @csrf
            @method('PUT')
            <div>
                <label for="">Inicio:</label>
                <input class="form-control" type="datetime-local"value="{{$function->start }}" name="start" required >
                </div>
                <div>
                <label for="">Termina:</label>
                <input class="form-control" type="datetime-local" value="{{$function->end }}"name="end"  required >
                </div>
                <div>
                    <label for="">Disponible</label>
                    <select class="form-control" name="available"id="" required>
                        <option value="{{ $function->available }}">{{ $function->available }}</option>
                        <option value="0">Si</option>
                        <option value="1">No</option>
                    </select>
                <div>
                    <label for="">Tipo:</label>
                    <select class="form-control" name="type" id="" required>
                        <option value="{{ $function->type }}">{{ $function->type }}</option>
                        <option value="mañana">mañana</option>
                        <option value="tarde">tarde</option>
                        <option value="noche">noche</option>
                    </select>
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="Guardar cambios">
                </div>
        </form>
    </div>

@endsection

