<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;

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

    return view('auth.login');
});

Route::get('clientes',[ ClienteController::class,'index'])->name('clientes');
Route::post('clientes',[ ClienteController::class,'store'])->name('clientes.store');
// ruta editar
Route::get('clientes/{cliente}/edit',[ ClienteController::class,'edit'])->name('clientes.edit');
// ruta update
Route::put('clientes/{cliente}',[ ClienteController::class,'update'])->name('clientes.update');
// Ruta eliminar delete
Route::delete('clientes/{cliente}',[ ClienteController::class,'destroy'])->name('clientes.destroy');





Route::get('proveedores', [ProveedorController::class, 'index'])->name('proveedores');
//ruta de guardar
Route::post('proveedores',[ ProveedorController::class,'store'])->name('proveedores.store');
// ruta editar
Route::get('proveedores/{proveedor}/edit',[ ProveedorController::class,'edit'])->name('proveedores.edit');
// ruta update
Route::put('proveedores/{proveedor}',[ ProveedorController::class,'update'])->name('proveedores.update');
// Ruta eliminar delete
Route::delete('proveedores/{proveedor}',[ ProveedorController::class,'destroy'])->name('proveedores.destroy');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
