@extends('layouts.dashboard')
@section('title', 'Registro cliente')
@section('subtitulo', 'REGISTRO CLIENTE')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Registro Cliente:</h1>
    <fieldset>
        <form action="{{route('clientes.almacenar_registro')}}" method="POST">

            @csrf

            <label>
                Nombres:</br>
                <input type="text" name="nombres">
            </label>

            <label>
                Apellido paterno:</br>
                <input type="text" name="ap_paterno">
            </label>

            <label>
                Apellido materno:</br>
                <input type="text" name="ap_materno">
            </label>

            <label>
                Telefono:</br>
                <input type="number" name="telefono" min="10">
            </label>
            </br>
            <label>
                Correo electronico:</br>
                <input type="email" name="email">
            </label>

            <label>
                Direccion;</br>
                <input type="text" name="direccion">
            </label>

            <label>
                RFC:</br>
                <input type="text" name="rfc">
            </label>

            <label>
                Descripcion:</br>
                <input type="text" name="descripcion">
            </label></br>
            <button type="submit">Registrar Cliente</button>
        </form>
    </fieldset>
</div>
@endsection
