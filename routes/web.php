<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\elmeucontrolador;
use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/inici', function(){
    return view('index');
});

Route::get('/dorsales', function(){
    return view('dorsales');
});

Route::get('/jugadores', function(){
    return view('jugadores'); 
});

Route::get('/inici', function () {
    return view('index');
})->name('todos');

Route::get('/mostrar',[elmeucontrolador::class, 'mostrar'])->name('todos-mostrar');

Route::post('index', [elmeucontrolador::class, 'insert'])->name('todos');

Route::get('/add_player', [elmeucontrolador::class, 'formulari'])->name('add_player');

Route::post('add_player', [elmeucontrolador::class, 'insert'])->name('todos');

Route::get('/buscar', [elmeucontrolador::class,  'formularibuscar'])->name('todos-buscar');
Route::post('/buscar', [elmeucontrolador::class, 'buscar'])->name('todos-buscar');


// Route::get('/inici', function () {
//     return view('app');
// });
