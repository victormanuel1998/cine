<?php

namespace App\Http\Controllers;

use App\Movie;
use Barryvdh\DomPDF\Facade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MovieExport;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * Cards
     */
    public function index()
    {

        $movies = DB::table('movies')->paginate(5);
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'  => 'required',
                'synopsis'  => '',
                'category'=>'required',
                'director'  => 'required',
                'actors'=>'required',
                'genre'     => 'required',
                'duration'  => 'required',
                'available' => 'required',
                'created_at'=>'required',
                'updated_at'=>'required'
            ]
        );
        Movie::create($request->all());
        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate(
            [
                'name'      => 'required',
                'synopsis'  => '',
                'director'  => 'required',
                'genre'     => 'required',
                'duration'  => 'required',
                'available' => 'required',
                'created_at'=>'required',
                'updated_at'=>'required'
            ]
        );

        $movie->update($request->all());

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }

    // Crear función para vista en forma tabular
    public function viewTable()
    {
        $movies = DB::table('movies')->paginate(10);
        return view('movies.viewTable', compact('movies'));
    }
    public function exportPDF()
    {
        //aqui cambiaras loque es la varaible y el modelo que usas de ahi todo es igual
        $movies = Movie::get();
        //de porsi marca error
        $pdf = Facade::loadView('movies.exportPDF', compact('movies'));
        //línea para descargar PDF directamente
        //return $pdf->download('proveedores.pdf');
        $pdf->setPaper('x4', 'landscape');
        //linea para descargar PDF con autorización del usuario
        return $pdf->stream();

        //para cambiar a horizontal la hoja
        //$pdf->setPaper('x4','landscape');
        //return $pdf->stream();

    }

public function exportToXls(){
    $movies = movie::get();
    return Excel::download(new MovieExport, 'movies.xlsx');

}
public function exportToCsv(){

    return Excel::download(new MovieExport, 'movies.csv');


}public function consumablexml(){
    return view('movies.index',compact('movies'));
}
}

