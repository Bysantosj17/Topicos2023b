@extends('layouts.dashboard')
@section('title', 'INICIO PRODUCTO')
@section('subtitulo', 'INICIO PRODUCTO')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Inicio productos</h1>
    <h2><a href="{{route('productos.registro')}}">Crear producto</a></h2>
    <ul>
        @foreach ($productos as $producto)
            <li>
                <h4><a href="{{route('productos.detalle', $producto)}}">{{$producto->nombre}}</a></h4> <a class="botones" href="{{route('productos.editar', $producto->id)}}">Editar</a>
                </br></br>
                <form action="{{route('productos.eliminar', $producto)}}" method="POST">
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
