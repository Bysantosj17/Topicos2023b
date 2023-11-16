@extends('layouts.dashboard')
@section('title', 'INICIO PROVEEDOR')
@section('subtitulo', 'INICIO PROVEEDOR')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Inicio proveedor</h1>
    <a href="#">Crear proveedor</a>
    <ul>
        @foreach ($proveedores as $proveedor)
            <li>
                <a href="{{route('proveedores.detalle', $proveedor)}}">{{$proveedor->nombres}}</a>
            </li>
        @endforeach
    </ul>
@endsection
