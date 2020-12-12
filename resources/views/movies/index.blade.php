@extends('layouts.app')
@section('title', 'Películas')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<div class="row">
    <div class="col-sm-2">
        <a href="{{ route('movies.create') }}">
            <button class="btn btn-primary">Agregar</button>
 </div>
        </a>
        <a href="{{route('movies.pdf')}}" class="btn btn-danger ml-auto">PDF</a>
        <a href ="/moviesXLS"  class="btn btn-danger">XLS</a>
        <a href ="moviesCSV" class="btn btn-dark">CSV</a>
        <a class="btn btn-secondary" href="{{ route('xmlmovies')}}" target="_blank">xml</a>
       <!--aqui sera lo de functions.pdf que lleva el metodo name-->
        <a href="{{route('home')}}" class="btn btn-danger">Inicio</a>
        <a href="{{route('movies.grafica')}}" class="btn btn-warning">Graficar</a>
    </div>
    <div class="col-sm-10"><h1>Películas registradas</h1></div>
</div>
<canvas id="myChart" width="400" height="400"></canvas>
<table class="table table-striped table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <td>name</td>
            <td>synopsis</td>
            <td>category</td>
            <td>director</td>
            <td>duration</td>
            <td>actors</td>
            <td>genre</td>
            <td>opciones</td>

        </tr>
    </thead>
    @foreach ($movies as $cat)
    <tr>
        <td>{{$cat->name}}</td>
        <td>{{$cat->synopsis}}</td>
    <td>{{$cat->category}}</td>
    <td>{{$cat->director}}</td>
    <td>{{$cat->duration}}</td>
    <td>{{$cat->actors}}</td>
    <td>{{$cat->genre}}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Acciones">
            <a href="{{route('movies.show', $cat->id)}}" class="btn btn-info btn-sm">
                <i class="fa fa-eye">Ver</i>
            </a>
            <a href="{{route('movies.edit', $cat->id)}}" class="btn btn-success btn-sm">
                <i class="fa fa-edit">Editar</i>
            </a>
            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$cat->id}}"
                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                <i class="fa fa-trash">Eliminar</i>
            </button>
            <form action="{{route('movies.destroy', $cat->id)}}" id="delete_{{$cat->id}}"
                method="post" enctype="multipart/form-data" hidden>
                @csrf
                @method('DELETE')
                
            </form>
            
    </td>
   
    </tr>
    @endforeach
</table>

{{ $movies->links() }}

@endsection


