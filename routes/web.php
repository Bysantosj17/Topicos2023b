<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

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

Route::controller(ClientesController::class)->group(function(){
    Route::get('clientes', 'InicioClientes')->name('clientes.inicio');
    Route::get('clientes/registro', 'RegistroClientes')->name('clientes.registro');
    Route::get('clientes/detalle_cliente/{cliente}', 'DetalleCliente')->name('clientes.detalle');
    Route::get('clientes/{cliente}/editar_cliente', 'EditarCliente')->name('clientes.editar');

    Route::post('clientes', 'AlmacenarRegistro')->name('clientes.almacenar_registro');

    Route::put('clientes/{cliente}', 'ActualizarCliente')->name('clientes.actualizar');

    Route::delete('clientes/{cliente}', 'EliminarCliente')->name('clientes.eliminar');
});

Route::controller(ProductosController::class)->group(function(){
    Route::get('productos', 'InicioProductos')->name('productos.inicio');
    Route::get('productos/registro', 'RegistroProducto')->name('productos.registro');
    Route::get('productos/detalle_producto/{producto}', 'DetalleProducto')->name('productos.detalle');
    Route::get('productos/{producto}/editar_producto', 'EditarProducto')->name('productos.editar');

    Route::post('productos', 'AlmacenarRegstro')->name('productos.almacenar_registro');

    Route::put('productos/{producto}', 'ActualizarProducto')->name('productos.actualizar');

    Route::delete('productos/{producto}', 'EliminarProducto')->name('productos.eliminar');
});

Route::controller(ProveedoresController::class)->group(function(){
    Route::get('proveedores', 'InicioProveedores')->name('proveedores.inicio');
    Route::get('proveedores/detalle_proveedor/{proveedor}', 'DetalleProveedor')->name('proveedores.detalle');
    Route::get('proveedores/registro', 'RegistroProveedor')->name('proveedor.registro');
});

Route::controller(UsuariosController::class)->group(function(){
    Route::get('usuarios', 'InicioUsuarios')->name('usuarios.inicio');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
