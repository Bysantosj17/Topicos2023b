<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function InicioProveedores(){

        $proveedores = Proveedor::orderBy('id', 'desc')->paginate(10);

        return view('proveedores.inico_proveedores', compact('proveedores'));
    }

    public function RegistroProveedor(){
        return view ('proveedores.registro_proveedores');
    }

    public function DetalleProveedor(Proveedor $proveedor){

        return view('proveedores.detalle_proveedor', compact('proveedor'));
    }

    public function AlamcenarRegistro(Request $request){
        $proveedor = new Proveedor();

        $proveedor->nombres = $request->nombres;
        $proveedor->ap_paterno = $request->ap_paterno;
        $proveedor->ap_materno = $request->ap_materno;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->compania = $request->compania;
        $proveedor->direccion = $request->direccion;
        $proveedor->descripcion = $request->descripcion;

        $proveedor->save();

        return redirect()->route('proveedores.detalle', $proveedor);
    }

    public function EditarProveedor(Proveedor $proveedor){
        return view('proveedores.actualizar_proveedor', compact('proveedor'));
    }

    public function ActualizarProveedor(Request $request, Proveedor $proveedor){
        $proveedor->nombres = $request->nombres;
        $proveedor->ap_paterno = $request->ap_paterno;
        $proveedor->ap_materno = $request->ap_materno;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->compania = $request->compania;
        $proveedor->direccion = $request->direccion;
        $proveedor->descripcion = $request->descripcion;

        $proveedor->save();

        return redirect()->route('proveedores.detalle', $proveedor);
    }

    public function EliminarProveedor(Proveedor $proveedor){
        $proveedor->delete();

        return redirect()->route('proveedores.inicio');
    }
}
