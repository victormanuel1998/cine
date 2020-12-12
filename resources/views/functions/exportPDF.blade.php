//este lo vas a crear en tdolo loq ue vas a exportat solo cambiaras los valores de la tabla
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
    <title>Funciones</title>
</head>
<body>
    <h2>Reporte de Funciones</h2>
    <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <td>Start</td>
                <td>end</td>
                <td>available</td>
                <td>type</td>
            </tr>
        </thead>
        @foreach ($functions as $cat)
        <tr>
            <td>{{$cat->start}}</td>
            <td>{{$cat->end}}</td>
        <td>{{$cat->available}}</td>
        <td>{{$cat->type}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>