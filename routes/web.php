<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipopartidaController;
use App\Http\Controllers\TipocomprobanteController;
use App\Http\Controllers\PartidaencabezadoController;
use App\Http\Controllers\CatalogocuentaController;
use App\Http\Controllers\subCuentasController;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\importarController;
use App\Http\Controllers\subCategorias;
use App\Http\Controllers\MovimientoController;
use App\Models\Movimiento;
use App\Models\Saldo;
use App\Models\Catalogocuenta;
use App\Models\Partidaencabezado;
use App\Models\Tipocomprobantes;
use App\Models\Tipopartida;




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
    return view('auth.login');
});


Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/tipopartidas', TipopartidaController::class);
    Route::resource('/tipocomprobantes', TipocomprobanteController::class);
    Route::resource('/partidaencabezados', PartidaencabezadoController::class);
    Route::resource('/catalogocuentas', CatalogocuentaController::class);
    Route::resource('/saldos', SaldoController::class);

    Route::get('/importar', [importarController::class, 'index']);
    Route::post('/importData', [importarController::class, 'importar']);

    Route::get('/subcuentas/{n1}', [subCategorias::class, 'index']);
    Route::get('/subcuentas-create/{id}', [subCategorias::class, 'create']);
    route::resource('Subcuentas', subCategorias::class);

    

});


