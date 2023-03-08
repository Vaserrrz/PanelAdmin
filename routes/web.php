<?php

use App\Http\Controllers\RemotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EncargadoController;
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
//CLIENTES
Route::get('clientes',[ ClienteController::class,'index'])->name('clientes');
Route::post('clientes',[ ClienteController::class,'store'])->name('clientes.store');
// ruta editar
Route::get('clientes/{cliente}/edit',[ ClienteController::class,'edit'])->name('clientes.edit');
// ruta update
Route::put('clientes/{cliente}',[ ClienteController::class,'update'])->name('clientes.update');
// Ruta eliminar delete
Route::delete('clientes/{cliente}',[ ClienteController::class,'destroy'])->name('clientes.destroy');

//PROVEEDORES
Route::get('proveedores', [ProveedorController::class, 'index'])->name('proveedores');
//ruta de guardar
Route::post('proveedores',[ ProveedorController::class,'store'])->name('proveedores.store');
// ruta editar
Route::get('proveedores/{proveedor}/edit',[ ProveedorController::class,'edit'])->name('proveedores.edit');
// ruta update
Route::put('proveedores/{proveedor}',[ ProveedorController::class,'update'])->name('proveedores.update');
// Ruta eliminar delete
Route::delete('proveedores/{proveedor}',[ ProveedorController::class,'destroy'])->name('proveedores.destroy');

//REMOTAS
Route::get('remotas', [RemotaController::class, 'index'])->name('remotas');
//ruta de guardar
Route::post('remotas',[ RemotaController::class,'store'])->name('remotas.store');
// ruta editar
Route::get('remotas/{remota}/edit',[ RemotaController::class,'edit'])->name('remotas.edit');
// ruta update
Route::put('remotas/{remota}',[ RemotaController::class,'update'])->name('remotas.update');
// Ruta eliminar delete
Route::delete('remotas/{remota}',[ RemotaController::class,'destroy'])->name('remotas.destroy');


//ENCARGADOS
Route::get('encargados', [EncargadoController::class, 'index'])->name('encargados');
//ruta de guardar
Route::post('encargados',[ EncargadoController::class,'store'])->name('encargados.store');
// ruta editar
Route::get('encargados/{encargado}/edit',[ EncargadoController::class,'edit'])->name('encargados.edit');
// ruta update
Route::put('encargados/{encargado}',[ EncargadoController::class,'update'])->name('encargados.update');
// Ruta eliminar delete
Route::delete('encargados/{encargado}',[ EncargadoController::class,'destroy'])->name('encargados.destroy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
