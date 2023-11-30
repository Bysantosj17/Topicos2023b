<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function InicioClientes(){

        $clientes = Cliente::orderBy('id', 'desc')->paginate(10);

        return view ('clientes.inicio_clientes', compact('clientes'));
    }

    public function RegistroClientes(){
        return view ('clientes.registro_clientes');
    }

    public function DetalleCliente(Cliente $cliente){

        return view('clientes.detalle_cliente', compact('cliente'));
    }

    public function AlmacenarRegistro(ClientesRequest $request){

        /*$cliente = new Cliente();

        $cliente->nombres = $request->nombres;
        $cliente->ap_paterno = $request->ap_paterno;
        $cliente->ap_materno = $request->ap_materno;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->rfc = $request->rfc;
        $cliente->direccion = $request->direccion;
        $cliente->descripcion = $request->descripcion;

        $cliente->save(); */

        /*$cliente = Cliente::create([
            'nombre' => $request->nombres,
            'ap_paterno' => $request->ap_paterno,
            'ap_materno' => $request->ap_materno,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'rfc' => $request->rfc,
            'direccion' => $request->direccion,
            'descripcion'  => $request->descripcion
        ]); */

        $cliente = Cliente::create($request->all());

        return redirect()->route('clientes.detalle', $cliente);
    }

    public function EditarCliente(Cliente $cliente){
        return view ('clientes.actualizar_cliente', compact('cliente'));
    }

    public function ActualizarCliente(ClientesRequest $request, Cliente $cliente){

        /*$cliente->nombres = $request->nombres;
        $cliente->ap_paterno = $request->ap_paterno;
        $cliente->ap_materno = $request->ap_materno;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->rfc = $request->rfc;
        $cliente->direccion = $request->direccion;
        $cliente->descripcion = $request->descripcion;

        $cliente->save(); */

        $cliente->update($request->all());

        return redirect()->route('clientes.detalle', $cliente);
    }

    public function EliminarCliente(Cliente $cliente){
        $cliente->delete();

        return redirect()->route('clientes.inicio');
    }
}
