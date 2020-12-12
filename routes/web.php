<?php

use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movies', 'MovieController');
Route::get('/movies.viewTable', 'MovieController@viewTable');
Route::resource('consumables','ConsumableController');
Route::get('consumablesindex','ConsumableController@index')->name('consumablesindex');
Route::resource('entrances', 'EntranceController');
Route::resource('rooms','RoomController');
Route::resource('functions', 'FunctionsController');
//aqui llamras lo que es la funcion de impirmir y pondras lo que es el nombre para el boton en este caso es functions.pdf
Route::get('functions-pdf','FunctionsController@exportPDF')->name('functions.pdf');
Route::get('movies-pdf','MovieController@exportPDF')->name('movies.pdf');
Route::get('consumables-pdf','ConsumableController@exportPDF')->name('consumables.pdf');
Route::get('entrances-pdf','EntranceController@exportPDF')->name('entrances.pdf');
Route::get('rooms-pdf','RoomController@exportPDF')->name('rooms.pdf');
Route::resource('entrances', 'EntranceController');
Route::get('/moviesXLS','MovieController@exportToXls');
Route::get('/moviesCSV','MovieController@exportToCsv');
Route::get('/consumablesXLS','ConsumableController@exportToXls');
Route::get('/consumablesCSV','ConsumableController@exportToCsv');
Route::get('/entrancesXLS','EntranceController@exportToXls');
Route::get('ExcelEntrence','EntranceController@exportToCsv');
Route::get('/roomsXLS','RoomController@exportToXls');
Route::get('roomsCSV','RoomController@exportToCsv');
Route::get('/functionsXLS','FunctionsController@exportToXls');
Route::get('functionsCSV','FunctionsController@exportToCsv');

//ruta para ver los xml
Route::get('moviesxml', function () {
    $users = App\Movie::all();
    return response()->xml(['movies' => $users->toArray()]);
})->name('xmlmovies');

Route::get('roomsxml', function () {
    $users = App\Room::all();
    return response()->xml(['rooms' => $users->toArray()]);
})->name('xmlrooms');

Route::get('fucntionsxml', function () {
    $users = App\functions::all();
    return response()->xml(['functions' => $users->toArray()]);
})->name('xmlfunctions');

Route::get('entrancessxml', function () {
    $users = App\Entrance::all();
    return response()->xml(['entrances' => $users->toArray()]);
})->name('xmlentrances');
Route::get('consumables', function () {
    $users = App\Consumable::all();
    return response()->xml(['consumables' => $users->toArray()]);
})->name('xmlconsumables');
Route::get('graficas.graficarPeliculas', 'GraficasController@graficarPeliculas')->name('movies.grafica');
Route::get('graficas.graficarSalas', 'GraficasController@graficarSalas')->name('rooms.grafica');
Route::get('graficas.graficarAlimentos', 'GraficasController@graficarAlimentos')->name('consumables.grafica');
Route::get('graficas.graficarEntradas', 'GraficasController@graficarEntradas')->name('entrances.grafica');
Route::get('graficas.graficarFunciones', 'GraficasController@graficarFunciones')->name('functions.grafica');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
