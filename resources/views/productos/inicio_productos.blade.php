@extends('layouts.dashboard')
@section('title', 'INICIO PRODUCTO')
@section('subtitulo', 'INICIO PRODUCTO')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Inicio productos</h1>
    <h2><a href="{{route('productos.registro')}}">Crear producto</a></h2>
    <div class="tabla_resultados">
        <table>
            @foreach ($productos as $producto)
            <tr>
                <td><h5><a href="{{route('productos.detalle', $producto)}}">
                    {{$producto->nombre}}</a></td></h5>
                <td><a class="botones" href="{{route('productos.editar', $producto->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('productos.eliminar', $producto)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="botones_eliminar" type="submit"
                        onclick="return confirm('Estás seguro que deseas eliminar el producto: {{$producto->nombre}}?');">Eliminar
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
</div>
@endsection
