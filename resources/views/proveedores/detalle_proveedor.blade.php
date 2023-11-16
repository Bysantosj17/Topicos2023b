@extends('layouts.dashboard')
@section('title', 'Proveedor: ' . $proveedor->nombres)
@section('subtitulo', 'DETALLE PROVEEDOR')
@section('content-dashboard')

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <h1><center>Bienvenido a la vista de detalle proveedor</center></h1>
    </br>
    <h2>Proveedor: {{$proveedor->nombres, $proveedor->ap_paterno, $proveedor->ap_materno }}</h2>

    <h6>Telefono:</h6><p><strong>{{ $proveedor->telefono}}</strong></p>
    <h6>Email: </h6><p><Strong>{{ $proveedor->email}}</Strong></p>
    <h6>Compañia: </h6><p><strong>{{ $proveedor->compania}}</strong></p>
    <h6>Direccion: </h6><p><strong>{{ $proveedor->direccion}}</strong></p>
    <h6>Descripcion: </h6><p><strong>{{ $proveedor->descripcion}}</strong></p>

    <h4><a href="#">Editar proveedor</a></h4>
    <h3><a href="{{route('proveedores.inicio')}}">Volver a los proveedor</a></h3>

</div>

@endsection
