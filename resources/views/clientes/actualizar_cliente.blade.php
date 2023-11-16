@extends('layouts.dashboard')
@section('title', 'Editar cliente')
@section('subtitulo', 'EDITAR CLIENTE')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Editar Cliente: </h1>
    <fieldset>
        <form action="{{route('clientes.actualizar', $cliente)}}" method="POST">

            @csrf

            @method('put')

            <label>
                Nombres:</br>
                <input type="text" name="nombres" value="{{$cliente->nombres}}">
            </label>

            <label>
                Apellido paterno:</br>
                <input type="text" name="ap_paterno" value='{{$cliente->ap_paterno}}'>
            </label>

            <label>
                Apellido materno:</br>
                <input type="text" name="ap_materno" value='{{$cliente->ap_materno}}'>
            </label>

            <label>
                Telefono:</br>
                <input type="number" name="telefono" min="10" value='{{$cliente->telefono}}'>
            </label>
            </br>
            <label>
                Correo electronico:</br>
                <input type="email" name="email" value='{{$cliente->email}}'>
            </label>

            <label>
                Direccion;</br>
                <input type="text" name="direccion" value='{{$cliente->direccion}}'>
            </label>

            <label>
                RFC:</br>
                <input type="text" name="rfc" value='{{$cliente->rfc}}'>
            </label>
            </br>
            <label>
                Descripcion:</br>
                <textarea type="text" name="descripcion">{{$cliente->descripcion}}
                </textarea>
            </label></br>
            <center><button class="botones" type="submit" onclick="return confirm('¿Desea guardar cliente?');">Actualizar cliente</button></center>
        </form>
    </fieldset>
    <h3><a href="{{route('clientes.inicio')}}">Volver a los clientes</a></h3>
</div>
@endsection
