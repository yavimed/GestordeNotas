<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\notaController;


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


route::get('/notas', [notaController::class, 'index'])
->name('notas.index');

route::get('vernotas/{id}',[notaController::class, 'vernota'])
->name('nota.ver');

route::get('/notas/crear', [notaController::class, 'crear'])
->name('nota.crear');

route::post('/notas/crear', [notaController::class, 'guardar'])
->name('nota.guardar');

route::get('/vernota/{id}/editar', [notaController::class, 'edit'])
->name('nota.edit')->where('id', '[0-9]+');

route::delete('/notas/{id}/borrar', [notaController::class, 'eliminar'])
->name('nota.borrar')->where('id', '[0-9]+');

route::get('/notas/categorias', [notaController::class, 'notasPorCategoria'])
->name('nota.categorias');





//rutas de autenticacion
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
