@extends('layouts.dashboard')
@section('title', 'INICIO PROVEEDOR')
@section('subtitulo', 'INICIO PROVEEDOR')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Inicio proveedor</h1>
    <h2><a href="{{route('proveedores.registro')}}">Crear proveedor</a></h2>
    <div class="tabla_resultados">
        <table>
            @foreach ($proveedores as $proveedor)
            <tr>
                <td><h5><a href="{{route('proveedores.detalle', $proveedor)}}">
                    {{$proveedor->nombres}} {{$proveedor->ap_paterno}} {{$proveedor->ap_materno}}</a></td></h5>
                <td><a class="botones" href="{{route('proveedores.editar', $proveedor->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('proveedores.eliminar', $proveedor)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="botones_eliminar" type="submit"
                        onclick="return confirm('Estás seguro que deseas eliminar el proveedor: {{$proveedor->nombres}} {{$proveedor->ap_paterno}} {{$proveedor->ap_materno}}?');">Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            @endforeach
    </table>
    </div>
    <div class="card-body">
        {{$proveedores->links()}}
    </div>

@endsection
