<?php

namespace App\Http\Controllers;

use App\Consumable;
use Barryvdh\DomPDF\Facade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ConsumableExport;


class ConsumableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $consumables = Consumable::select('*')->get();
        return view('consumables.index', compact('consumables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumables.create');
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
                'name' => 'required',
                'price'  => 'required',
                'quantity'  => 'required'
            ]
        );
        Consumable::create($request->all());
        return redirect()->route('consumables.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumable  $consumable
     * @return \Illuminate\Http\Response
     */
    public function show(Consumable $consumable)
    {
        
        return view('consumables.show', compact('consumable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumable  $consumable
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumable $consumable)
    {
        return view('consumables.edit', compact('consumable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumable  $consumable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumable $consumable)
    {
        $request->validate(
            [
                'name'  => 'required',
                'price'  => 'required',
                'quantity'  => 'required'
            ]
        );
        $consumable->update($request->all());
        return redirect()->route('consumables.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumable  $consumable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumable $consumable)
    {
        $consumable ->delete();
        return redirect()->route('consumables.index');
    }
    public function exportPDF()
    {
        //aqui cambiaras loque es la varaible y el modelo que usas de ahi todo es igual
        $consumables = Consumable::get();
        //de porsi marca error
        $pdf = Facade::loadView('consumables.exportPDF', compact('consumables'));
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
        $consumables = Consumable::get();
        return Excel::download(new ConsumableExport, 'consumables.xlsx');
    
    }
    public function exportToCsv(){
    
        return Excel::download(new ConsumableExport, 'consumables.csv');
    
    }public function consumablexml(){
        return view('consumables.index',compact('consumables'));
    }
}

