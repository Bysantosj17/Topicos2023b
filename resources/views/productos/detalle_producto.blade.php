@extends('layouts.dashboard')
@section('title', 'Producto: ' . $producto->nombre)
@section('subtitulo', 'DETALLE PRODUCTO')
@section('content-dashboard')

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1><center>Bienvenido a la vista de detalle producto</center></h1>
    </br>
    <h2>Producto: {{$producto->nombre}}</h2>

    <h6>Codigo de barras: </h6><p><strong>{{ $producto->codigo_barras }}</strong></p>
    <h6>Categoria: </h6><p><strong>{{ $producto->categoria }}</strong></p>
    <h6>Precio: </h6><p><Strong>{{ $producto->precio}}</Strong></p>
    <h6>Fecha de caducidad: </h6><p><strong>{{ $producto->fecha_caducidad }}</strong></p>
    <h6>Descripcion: </h6><p><strong>{{ $producto->descripcion }}</strong></p>

    <h4><a href="{{route('productos.editar', $producto)}}">Editar producto</a></h4>
    <h3><a href="{{route('productos.inicio')}}">Volver a los productos</a></h3>
</div>

@endsection
