<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/registrar', function () { return view('registrar'); })->name('registrar');;

Route::post('/registrar2', [ClientesController::class, 'store']);

Route::get('/consultar', [ClientesController::class, 'show'])->name('consultar');

Route::get('/consulta', function () {return view('consulta'); });

Route::get('/editar/{Cep}', [ClientesController::class, 'edit']);

Route::put('/atualizar/{Cep}', [ClientesController::class, 'update']);

Route::get('/excluir/{Cep}', [ClientesController::class, 'delete']);

require __DIR__.'/auth.php';
