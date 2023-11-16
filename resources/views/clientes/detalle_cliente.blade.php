@extends('layouts.dashboard')
@section('title', 'Cliente: ' . $cliente->nombres)
@section('subtitulo', 'DETALLE CLIENTE')
@section('content-dashboard')

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <h1><center>Bienvenido a la vista de detalle cliente</center></h1>
    </br>
    <h2>Cliente: {{$cliente->nombres}} {{$cliente->ap_paterno}} {{$cliente->ap_materno}}</h2>
    <h6>Telefono:</h6><p><strong>{{ $cliente->telefono }}</strong></p>
    <h6>Email: </h6><p><Strong>{{ $cliente->email }}</Strong></p>
    <h6>RFC: </h6><p><strong>{{ $cliente->rfc }}</strong></p>
    <h6>Direccion: </h6><p><strong>{{ $cliente->direccion }}</strong></p>
    <h6>Descripcion: </h6><p><strong>{{ $cliente->descripcion }}</strong></p>

    <h4><a href="{{route('clientes.editar', $cliente)}}">Editar cliente</a></h4>
    <h3><a href="{{route('clientes.inicio')}}">Volver a los clientes</a></h3>

</div>

@endsection
