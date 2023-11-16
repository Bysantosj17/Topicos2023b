<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function InicioProveedores(){

        $proveedores = Proveedor::orderBy('id', 'desc')->paginate();

        return view('proveedores.inico_proveedores', compact('proveedores'));
    }

    public function RegistroProveedor(){
        return view ('proveedores.registro_proveedores');
    }

    public function DetalleProveedor(Proveedor $proveedor){

        return view('proveedores.detalle_proveedor', compact('proveedor'));
    }
}
