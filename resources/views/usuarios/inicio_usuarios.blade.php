@extends('layouts.dashboard')
@section('title', 'INICIO USUARIOS')
@section('subtitulo', 'INICIO USUARIOS')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Inicio usuario</h1>
    <h2><a href="#">Crear un nuevo usuario</a></h2>
    <div class="tabla_resultados">
        <table>
            @foreach ($usuarios as $usuario)
            <tr>
                <td><h5><a href="#">{{$usuario->id}}</a></h5></td>
                <td><h5><a href="#">{{$usuario->name}}</a></h5></td>
            </tr>
            @endforeach
    </table>
    </div>
@endsection
