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
                <strong>Nombres:</strong></br>
                <input type="text" name="nombres" value="{{old('nombres')}}">
            </label>

            @error('nombres')
                <br>
                <span>*{{ $message}}</span>
                <br>
            @enderror

            <label>
                <strong>Apellido paterno:</strong></br>
                <input type="text" name="ap_paterno" value="{{old('ap_paterno')}}">
            </label>

            @error('ap_paterno')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            <label>
                <strong>Apellido materno:</strong></br>
                <input type="text" name="ap_materno" value="{{old('ap_materno')}}">
            </label>

            @error('ap_materno')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            <label>
                <strong>Telefono:</strong></br>
                <input type="number" name="telefono" min="10" value="{{old('telefono')}}">
            </label>

            @error('telefono')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            </br>
            <label>
                <strong>Correo electronico:</strong></br>
                <input type="email" name="email" value="{{old('email')}}">
            </label>

            @error('email')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            <label>
                <Strong>Direccion:</Strong></br>
                <input type="text" name="direccion" value="{{old('direccion')}}">
            </label>

            @error('direccion')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            <label>
                <strong>RFC:</strong></br>
                <input type="text" name="rfc" value="{{old('rfc')}}">
            </label>

            @error('rfc')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror
            <br>

            <label>
                <strong>Descripcion:</strong></br>
                <textarea type="text" name="descripcion" value="{{old('descripcion')}}"> </textarea>
            </label>

            @error('descripcion')
                <br>
                    <span>*{{ $message}}</span>
                <br>
            @enderror

            <br><br>
            <button class="botones" type="submit">Registrar Cliente</button>
        </form>
    </fieldset>
</div>
@endsection
