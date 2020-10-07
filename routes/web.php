<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ReusController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/sair', function () 
{
    Auth::logout();
    return redirect('/');
})->name('sair');



Route::get('/', [ClientesController::class, 'index'])->name('index')->middleware('auth');
Route::get('/audiencia/realizada', [ClientesController::class, 'index'])->name('audiencia_realizada')->middleware('auth');
Route::get('/cliente/novo', [ClientesController::class, 'create'])->middleware('auth');
Route::post('/cliente/novo', [ClientesController::class, 'store']);
Route::get('/cliente/alterar/{id}',[ClientesController::class, 'editar'])->middleware('auth');
Route::post('/cliente/alterar/{id}',[ClientesController::class, 'update']);


Route::get('/reu/lista', [ReusController::class, 'index'])->name('index_reu')->middleware('auth');
Route::get('/reu/novo', [ReusController::class, 'create'])->middleware('auth');
Route::post('/reu/novo', [ReusController::class, 'store']);
Route::get('/reu/alterar/{id}', [ReusController::class, 'editar'])->middleware('auth');
Route::post('/reu/alterar/{id}', [ReusController::class, 'update']);


//Route::get('/clientes', 'App\Http\Controllers\ClientesController@index')->name('index');

