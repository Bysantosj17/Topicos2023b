<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function InicioProductos(){

        $productos = Producto::orderBy('id', 'desc')->paginate();

        return view('productos.inicio_productos', compact('productos'));
    }

    public function RegistroProducto(){
        return view ('productos.registro_productos');
    }

    public function DetalleProducto(Producto $producto){
        return view('productos.detalle_producto', compact('producto'));
    }

    public function AlmacenarRegstro(ProductoRequest $request){
        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->fecha_caducidad = $request->fecha_caducidad;
        $producto->codigo_barras = $request->codigo_barras;

        $producto->save();

        return redirect()->route('productos.detalle', $producto);
    }

    public function EditarProducto(Producto $producto){
        return view('productos.actualizar_producto', compact('producto'));
    }

    public function ActualizarProducto(ProductoRequest $request, Producto $producto){
        $producto->nombre = $request->nombre;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->fecha_caducidad = $request->fecha_caducidad;
        $producto->codigo_barras = $request->codigo_barras;

        $producto->save();

        return redirect()->route('productos.detalle', $producto);
    }

    public function EliminarProducto(Producto $producto){
        $producto->delete();

        return redirect()->route('productos.inicio');
    }
}
