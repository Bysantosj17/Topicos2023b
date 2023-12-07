@extends('layouts.dashboard')
@section('title', 'INICIO CLIENTE')
@section('subtitulo', 'INICIO CLIENTE')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Inicio cliente</h1>
    <h2><a href="{{route('clientes.registro')}}">Crear cliente</a></h2>
    <div class="tabla_resultados">
        <table>
            @foreach ($clientes as $cliente)
            <tr>
                <td><h5><a href="{{route('clientes.detalle', $cliente->slug)}}">
                    {{$cliente->nombres}} {{$cliente->ap_paterno}} {{$cliente->ap_materno}}</a></td></h5>
                <td><a class="botones" href="{{route('clientes.editar', $cliente->slug)}}">Editar</a></td>
                <td>
                    <form action="{{route('clientes.eliminar', $cliente->slug)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="botones_eliminar" type="submit"
                        onclick="return confirm('Estás seguro que deseas eliminar el cliente: {{$cliente->nombres}} {{$cliente->ap_paterno}} {{$cliente->ap_materno}}?');">Eliminar
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
    <br><br>
    <div class="card-body">
        {{$clientes->links()}}
</div>

@endsection
