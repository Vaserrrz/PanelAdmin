<?php

use App\Http\Controllers\RemotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\Revendedores;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SateliteController;
use App\Http\Controllers\MikrotikController;
use App\Http\Controllers\PersonaController;
use Illuminate\Routing\Route as RoutingRoute;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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
//detail
Route::get('clientes/{cliente}',[ ClienteController::class,'details'])->name('clientes.details');


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
//Ruta Detalle
Route::get('proveedores/{proveedor}',[ ProveedorController::class,'details'])->name('proveedores.details');


//REMOTAS
Route::get('remotas', [RemotaController::class, 'index'])->name('remotas');
//ruta de guardar
Route::post('remotas',[ RemotaController::class,'create'])->name('remotas.create');
// ruta editar
Route::get('remotas/{remota}/edit',[ RemotaController::class,'edit'])->name('remotas.edit');
// ruta update
Route::post('remotas/{remota}',[ RemotaController::class,'update'])->name('remotas.update');
// Ruta eliminar delete
Route::delete('remotas/{remota}',[ RemotaController::class,'destroy'])->name('remotas.destroy');
//detail
Route::get('remotas/{remota}',[ RemotaController::class,'details'])->name('remotas.details');

Route::get('/remotas_satelites', [RemotaController::class, 'getSatelites']);
Route::get('/remotas_plans',     [RemotaController::class, 'getPlan']);
Route::get('/remotas_encargados', [RemotaController::class, 'getEncargado']);
Route::get('/remotas_plan_properties', [RemotaController::class, 'getProperties']);

/*
// Rutas de PERSONAS
Route::get('personas',[PersonaController::class, 'index'])->name('personas');                       // Principal
Route::get('personas/create',[ PersonaController::class,'create'])->name('personas.create');       // Crear
Route::post('personas',[ PersonaController::class,'store'])->name('personas.store');                // Agregar
Route::get('personas/{persona}/edit',[ PersonaController::class,'edit'])->name('personas.edit');    // Editar
Route::put('personas/{persona}',[ PersonaController::class,'update'])->name('personas.update');    // Modificar
Route::get('personas/{tipo}',[PersonaController::class,'tipo'])->name('personas.tipo');             // Segun el tipo de persona
Route::get('personas/{persona}',[ PersonaController::class,'details'])->name('personas.details');   // Detalles
Route::delete('personas/{persona}',[ PersonaController::class,'destroy'])->name('personas.destroy');   // Eliminar
 */

//PERSONAS
Route::resource('personas',PersonaController::class);
Route::get('personas/{tipo}',[PersonaController::class,'tipo'])->name('personas.tipo');
Route::get('personas/{persona}',[ PersonaController::class,'details'])->name('personas.details');   // Detalles

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
//Ruta Detalle
Route::get('encargados/{encargado}',[ EncargadoController::class,'details'])->name('encargados.details');


/* //SOCIOS
Route::get('socios', [SocioController::class, 'index'])->name('socios');
//ruta de guardar
Route::post('socios',[ SocioController::class,'store'])->name('socios.store');
// ruta editar
Route::get('socios/{socio}/edit',[ SocioController::class,'edit'])->name('socios.edit');
// ruta update
Route::put('socios/{socio}',[ SocioController::class,'update'])->name('socios.update');
// Ruta eliminar delete
Route::delete('socios/{socio}',[ SocioController::class,'destroy'])->name('socios.destroy');
//Ruta Detalle
//Route::get('socios/{socio}',[ SocioController::class,'details'])->name('socios.details');*/

/*
//TECNICOS
Route::get('tecnicos', [TecnicoController::class, 'index'])->name('tecnicos');
//ruta de guardar
Route::post('tecnicos',[ TecnicoController::class,'store'])->name('tecnicos.store');
// ruta editar
Route::get('tecnicos/{tecnico}/edit',[ TecnicoController::class,'edit'])->name('tecnicos.edit');
// ruta update
Route::put('tecnicos/{tecnico}',[ TecnicoController::class,'update'])->name('tecnicos.update');
// Ruta eliminar delete
Route::delete('tecnicos/{tecnico}',[ TecnicoController::class,'destroy'])->name('tecnicos.destroy');
//Ruta Detalle
Route::get('tecnicos/{tecnico}',[ TecnicoController::class,'details'])->name('tecnicos.details');


//REVENDEDORES
Route::get('revendedores', [Revendedores::class, 'index'])->name('revendedores');
//ruta de guardar
Route::post('revendedores',[ Revendedores::class,'store'])->name('revendedores.store');
// ruta editar
Route::get('revendedores/{revendedor}/edit',[ Revendedores::class,'edit'])->name('revendedores.edit');
// ruta update
Route::put('revendedores/{revendedor}',[ Revendedores::class,'update'])->name('revendedores.update');
// Ruta eliminar delete
Route::delete('revendedores/{revendedor}',[ Revendedores::class,'destroy'])->name('revendedores.destroy');
//Ruta Detalle
/*Route::get('revendedores/{revendedor}',[ Revendedores::class,'details'])->name('revendedores.details');*/


//PLANES
Route::get('planes', [PlanController::class, 'index'])->name('planes');
//ruta de guardar
Route::post('planes',[ PlanController::class,'store'])->name('planes.store');
// ruta editar
Route::get('planes/{plan}/edit',[ PlanController::class,'edit'])->name('planes.edit');
// ruta update
Route::put('planes/{plan}',[ PlanController::class,'update'])->name('planes.update');
// Ruta eliminar delete
Route::delete('planes/{plan}',[ PlanController::class,'destroy'])->name('planes.destroy');
//Ruta Detalle
Route::get('planes/{plan}',[ PlanController::class,'details'])->name('planes.details');

// Route::get('/planes_satelites', [PlanController::class, 'getSatelites']);
Route::get('/planes_satelites', [PlanController::class, 'getSatelites']);



//SATELITE
Route::get('satelites', [SateliteController::class, 'index'])->name('satelites');
//ruta de guardar
Route::post('satelites',[ SateliteController::class,'store'])->name('satelites.store');
// ruta editar
Route::get('satelites/{satelite}/edit',[ SateliteController::class,'edit'])->name('satelites.edit');
// ruta update
Route::put('satelites/{satelite}',[ SateliteController::class,'update'])->name('satelites.update');
// Ruta eliminar delete
Route::delete('satelites/{satelite}',[ SateliteController::class,'destroy'])->name('satelites.destroy');
//Ruta Detalle
/*Route::get('satelites/{satelite}',[ SateliteController::class,'details'])->name('satelites.details');*/

//MIKROTIK
Route::get('mikrotiks', [MikrotikController::class, 'index'])->name('mikrotiks');
//ruta de guardar
Route::post('mikrotiks',[ MikrotikController::class,'store'])->name('mikrotiks.store');
// ruta editar
Route::get('mikrotiks/{Mikrotik}/edit',[ MikrotikController::class,'edit'])->name('mikrotiks.edit');
// ruta update
Route::put('mikrotiks/{Mikrotik}',[ MikrotikController::class,'update'])->name('mikrotiks.update');
// Ruta eliminar delete
Route::delete('mikrotiks/{Mikrotik}',[ MikrotikController::class,'destroy'])->name('mikrotiks.destroy');
//Ruta Detalle
Route::get('mikrotiks/{Mikrotik}',[ MikrotikController::class,'details'])->name('mikrotiks.details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});