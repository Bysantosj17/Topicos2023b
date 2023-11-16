@extends('layouts.dashboard')
@section('title', 'INICIO CLIENTE')
@section('subtitulo', 'INICIO CLIENTE')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Inicio Cliente</h1>
    <h2><a href="{{route('clientes.registro')}}">Crear cliente</a></h2>
    <ul>
        @foreach ($clientes as $cliente)
            <li>
                <h4><a href="{{route('clientes.detalle', $cliente)}}">{{$cliente->nombres}} {{$cliente->ap_paterno}} {{$cliente->ap_materno}}</h4></a> <a class="botones" href="{{route('clientes.editar', $cliente->id)}}">Editar</a>
                </br></br>
                <form action="{{route('clientes.eliminar', $cliente)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="botones_eliminar" type="submit" onclick="return confirm('Estás seguro que deseas eliminar el registro?');">Eliminar</button>
                </form>
                <hr>
            </li>
        @endforeach
    </ul>

</div>
@endsection
