<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RoomExport;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = DB::table('rooms')->paginate(2);
        return view('rooms.index', compact('rooms'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Room::create($request->all());
        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $request->validate(
            [
                'chairs'      =>'required',
                'location'  =>'required',
                'capacity'  =>'required'
            ]
        );

        $room->update($request->all());

        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index');

    }
// Crear función para vista en forma tabular
public function viewTable()
{
    $rooms= DB::table('rooms')->paginate(10);
    return view('rooms.viewTable', compact('rooms'));
}
public function exportPDF()
    {
        //aqui cambiaras loque es la varaible y el modelo que usas de ahi todo es igual
        $rooms = Room::get();
        //de porsi marca error
        $pdf = Facade::loadView('rooms.exportPDF', compact('rooms'));
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
        $rooms = Room::get();
        return Excel::download(new RoomExport, 'rooms.xlsx');
    
    }
    public function exportToCsv(){
    
        return Excel::download(new RoomExport, 'rooms.csv');
    
    }

public function roomsxml(){
    return view('rooms.index',compact('rooms'));
}
}

