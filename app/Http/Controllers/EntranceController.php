<?php

namespace App\Http\Controllers;

use App\Entrance;


use Barryvdh\DomPDF\Facade;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntranceExport;

class EntranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrances = DB::table('entrances')->paginate(2);
        return view('entrances.index', compact('entrances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entrances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Entrance::create($request->all());
        return redirect()->route('entrances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entrance  $entrance
     * @return \Illuminate\Http\Response
     */
    public function show(Entrance $entrance)
    {
        return view('entrances.show', compact('entrance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entrance  $entrance
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrance $entrance)
    {
        return view('entrances.edit', compact('entrance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entrance  $entrance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrance $entrance)
    {
        $request->validate(
            [
                'price'      => 'required',
                'hourEntrance'  => 'required'
            ]
            );
            $entrance->update($request->all());

            return redirect()->route('entrances.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entrance  $entrance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrance $entrance)
    {
        $entrance->delete();
        return redirect()->route('entrances.index');
    }
    public function exportPDF()
    {
        //aqui cambiaras loque es la varaible y el modelo que usas de ahi todo es igual
        $entrances = Entrance::get();
        //de porsi marca error
        $pdf = Facade::loadView('entrances.exportPDF', compact('entrances'));
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
        $entrances = Entrance::get();
        return Excel::download(new EntranceExport, 'entrances.xlsx');
    
    }
    public function exportToCsv(){
    
        return Excel::download(new EntranceExport, 'entrances.csv');
    
    }

public function entrancexml(){
    return view('entrances.index',compact('entrances'));
}
}
