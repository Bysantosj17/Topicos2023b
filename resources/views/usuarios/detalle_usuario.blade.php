@extends('layouts.dashboard')
@section('title', 'Usuario: ' . $usuario->name)
@section('subtitulo', 'DETALLE USUARIO')
@section('content-dashboard')

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <h1><center>Bienvenido a la vista de detalle usuario</center></h1>
    </br>
    <h2>Nombre: {{$usuario->name}}</h2>
    <h6>Correo electronico:</h6><p><strong>{{ $usuario->email }}</strong></p>
    <h6>Contraseña: </h6><p><Strong>{{ $usuario->password }}</Strong></p>

    <h4><a href="">Editar cliente</a></h4>
    <h3><a href="{{route('usuarios.inicio')}}">Volver a los usuarios</a></h3>

</div>

@endsection
