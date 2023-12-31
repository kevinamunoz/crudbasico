<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ListarController;

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

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/listar', [ListarController::class, 'listarUser'])->name('listar');
Route::get('/pdf/{id}', [ListarController::class, 'pdf'])->name('pdf');
Route::get('/usuarios', [ListarController::class, 'listarUser'])->name('listar');
Route::get('/usuarios/{id}/editar', [ListarController::class, 'showusers'])->name('editar');
Route::put('/usuarios/{id}', [ListarController::class, 'updateusers'])->name('usuarios.actualizar');
Route::delete('/usuarios/{id}', [ListarController::class, 'eliminar'])->name('eliminar');