<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Room;
use App\Consumable;
use App\Entrance;
use App\functions;

class GraficasController extends Controller
{
    public function graficarPeliculas(){
        $movies = Movie::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarPeliculas', compact('movies')); 
    }

    public function graficarSalas(){
        $rooms = Room::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarSalas', compact('rooms')); 
    }

    public function graficarAlimentos(){
        $consumables = Consumable::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarAlimentos', compact('consumables')); 
    }

    public function graficarEntradas(){
        $entrances = Entrance::select(\DB::raw("COUNT(*) as count"))->whereYear('hourEntrance', date('Y'))->groupBy(\DB::raw("Month(hourEntrance)"))->pluck('count');
        return view('graficas.graficarEntradas', compact('entrances')); 
    }

    public function graficarFunciones(){
        $premieres = functions::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarFunciones', compact('functions')); 
    }
}