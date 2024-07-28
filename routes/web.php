<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Models\Empleado;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VentaController;
Route::get('/', function () {
    return view('welcome');
});

//--------------------------------------------------------------------------------

Route::get('/', [HomeController::class, 'index']);


Route::get('/clientes',[ClienteController::class,'index']);
Route::get('clientes/{cliente}',[ClienteController::class,'show']);

Route::get("/cliente/create",[ClienteController::class,'create']);
Route::post("/clientes",[ClienteController::class,'store']);


Route::get('/clientes/{cliente}/edit',[ClienteController::class,'edit']);
Route::put('/clientes/{cliente}',[ClienteController::class,'update']);

Route::delete('clientes/{cliente}',[ClienteController::class,'destroy']);

//-------------------------------------------------------------------------------

Route::get('empleados',[EmpleadoController::class,'index']);
Route::get('empleados/{empleado}',[EmpleadoController::class,'show']);

Route::get("/empleado/create",[EmpleadoController::class,'create']);
Route::post("/empleados",[EmpleadoController::class,'store']);


Route::get('/empleados/{empleado}/edit',[EmpleadoController::class,'edit']);//si le quito el edit no pasa nada
Route::put('/empleados/{empleado}',[EmpleadoController::class,'update']);

Route::delete('empleados/{empleado}',[EmpleadoController::class,'destroy']);
//----------------------------------------------------------------------------------

Route::get('/productos',[ProductosController::class,'index']);
Route::get('productos/{producto}',[ProductosController::class,'show']);


Route::get("/producto/create",[ProductosController::class,'create']);
Route::post("/productos",[ProductosController::class,'store']);


Route::get('/productos/{producto}/edit',[ProductosController::class,'edit']);//si le quito el edit no pasa nada
Route::put('/productos/{producto}',[ProductosController::class,'update']);

Route::delete('productos/{producto}',[ProductosController::class,'destroy']);
// -----------------------------------------------------------------------------------




Route::get('/ventas', [VentaController::class, 'index']);

Route::get('/ventas/create', [VentaController::class, 'create']);
Route::post('/ventas', [VentaController::class, 'store']);

Route::get('/ventas/{venta}', [VentaController::class, 'show']);
// Route::get('/ventas/{venta}/edit', [VentaController::class, 'edit']);
// Route::put('/ventas/{venta}', [VentaController::class, 'update']);
Route::delete('/ventas/{venta}', [VentaController::class, 'destroy']);
