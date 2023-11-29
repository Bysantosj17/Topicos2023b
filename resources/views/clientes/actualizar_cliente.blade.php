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
                <input type="text" name="nombres" value="{{old('nombres', $cliente->nombres) }}">
            </label>


            @error('nombres')
                <br>
                <span>*{{ $message}}</span>
                <br>
            @enderror

            <label>
                Apellido paterno:</br>
                <input type="text" name="ap_paterno" value='{{old('ap_paterno',$cliente->ap_paterno)}}'>
            </label>

            @error('ap_paterno')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            <label>
                Apellido materno:</br>
                <input type="text" name="ap_materno" value='{{old('ap_materno', $cliente->ap_materno)}}'>
            </label>

            @error('ap_materno')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            <label>
                Telefono:</br>
                <input type="number" name="telefono" min="10" value='{{old('telefono', $cliente->telefono)}}'>
            </label>

            @error('telefono')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            </br>
            <label>
                Correo electronico:</br>
                <input type="email" name="email" value='{{old('email',$cliente->email)}}'>
            </label>

            @error('email')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            <label>
                Direccion;</br>
                <input type="text" name="direccion" value='{{old('direccion',$cliente->direccion)}}'>
            </label>

            @error('direccion')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            <label>
                RFC:</br>
                <input type="text" name="rfc" value='{{old('rfc',$cliente->rfc)}}'>
            </label>

            @error('rfc')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            </br>
            <label>
                Descripcion:</br>
                <textarea type="text" name="descripcion">{{old('descripcion', $cliente->descripcion)}}</textarea>
            </label>

            @error('descripcion')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror
            <br>

            <center><button class="botones" type="submit" onclick="return confirm('¿Desea guardar cliente?');">Actualizar cliente</button></center>
        </form>
    </fieldset>
    <h3><a href="{{route('clientes.inicio')}}">Volver a los clientes</a></h3>
</div>
@endsection
