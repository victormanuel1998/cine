<?php

namespace App\Http\Controllers;

use App\functions;
use Barryvdh\DomPDF\Facade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FunctionsExport;


class FunctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $functions = DB::table('functions')->paginate(5);
        return view('functions.index', compact('functions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('functions.create');
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
                'start' => 'required',
                'end' => 'required',
                'available' => 'required',
                'type' => 'required',
            ]
        );
        Functions::create($request->all());
        return redirect()->route('functions.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $function = Functions::where('id', $id)->firstOrFail();
        return view('functions.show', compact('function'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $function = Functions::where('id', $id)->firstOrFail();
        return view('functions.edit', compact('function'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate(
            [
                'start' => 'required',
                'end' => 'required',
                'available' => 'required',
                'type' => 'required',
            ]
        );
        $function = functions::find($id);
        $function->start = $request->start;
        $function->end = $request->end;
        $function->available = $request->available;
        $function->type = $request->type;
        $function->update();
        return redirect()->route('functions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $functions = functions::findOrFail($id);
        $functions->delete();
        return redirect()->route('functions.index');
    }
    // este metodo lo vas a pegar en todos 
    // solo cambiaras esto
    public function exportPDF()
    {
        //aqui cambiaras loque es la varaible y el modelo que usas de ahi todo es igual
        $functions = functions::get();
        //de porsi marca error
        $pdf = Facade::loadView('functions.exportPDF', compact('functions'));
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
        $functions = functions::get();
        return Excel::download(new FunctionsExport, 'functions.xlsx');
    
    }
    public function exportToCsv(){
    
        return Excel::download(new FunctionsExport, 'functions.csv');
    
    }
public function functionsxml(){
    return view('functions.index',compact('functionss'));
}

}
