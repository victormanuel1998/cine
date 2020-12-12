<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;
            border: 3px solid purple;
        }

        th,
        td,
        tr {
            width: 15%;
            text-align: left;
            vertical-align: top;
            border: 1px solid #000;
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>
    <title>Peliculas</title>
</head>
<body>
    <h2>Reporte de Peliculas</h2>
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
        
        </tr>
        @endforeach
    </table>
</body>
</html>