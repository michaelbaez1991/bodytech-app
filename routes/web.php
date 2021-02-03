<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\DepartamentoController;

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
    return view('home');
});

Route::get('clientes', [PersonaController::class, 'index'])->name('customers');
Route::post('registro', [PersonaController::class, 'store'])->name('creatRregister');
Route::get('ciudad', [DepartamentoController::class, 'getCities']);

Route::resource('personas','App\Http\Controllers\PersonaController');
// Route::get('personas',[PersonaController::class, 'index']);
// Route::get('personas/create',[PersonaController::class, 'create']);
// Route::post('personas',[PersonaController::class, 'store']);
// Route::delete('personas/destroy',[PersonaController::class, 'destroy']);