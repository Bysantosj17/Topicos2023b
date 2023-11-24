@extends('layouts.dashboard')
@section('title', 'Editar usuario')
@section('subtitulo', 'EDITAR USUARIO')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Editar usuario: {{$usuario->name}}</h1>
    <fieldset>
        <form action="{{route('usuarios.actualizar', $usuario)}}" method="POST">

            @csrf

            @method('put')

            <label>
                Nombre:</br>
                <input type="text" name="name">
            </label>

            <label>
                Correo Electronico:</br>
                <input type="text" name="email">
            </label>
            <label>
                Contraseña:</br>
                <input type="text" name="password">
            </label>
            <button type="submit">Actualizar usuario</button>
        </form>
    </fieldset>
</div>
@endsection
