@extends('layouts.dashboard')
@section('title', 'Editar proveedor')
@section('subtitulo', 'EDITAR PROVEEDOR')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Registro proveedor:</h1>
    <h2>Editar proveedor: {{$proveedor->nombres}} {{$proveedor->ap_paterno}} {{$proveedor->ap_materno}}</h2>
    <h2>Compañia: {{$proveedor->compania}}</h2>
    <fieldset>
        <form action="{{route('proveedores.actualizar', $proveedor)}}" method="POST">

            @csrf

            @method('put')

            <label>
                Nombres:</br>
                <input type="text" name="nombres" value="{{$proveedor->nombres}}">
            </label>

            <label>
                Apellido paterno:</br>
                <input type="text" name="ap_paterno" value="{{$proveedor->ap_paterno}}">
            </label>

            <label>
                Apellido materno:</br>
                <input type="text" name="ap_materno" value="{{$proveedor->ap_materno}}">
            </label>

            <label>
                Telefono:</br>
                <input type="number" name="telefono" min="10" value="{{$proveedor->telefono}}">
            </label>
            </br>
            <label>
                Correo electronico:</br>
                <input type="email" name="email" value="{{$proveedor->email}}">
            </label>

            <label>
                Direccion:</br>
                <input type="text" name="direccion" value="{{$proveedor->direccion}}">
            </label>

            <label>
                Compañia:</br>
                <input type="text" name="compania" value="{{$proveedor->compania}}">
            </label>
            <br>
            <label>
                Descripcion:</br>
                <textarea type="text" name="descripcion">{{$proveedor->descripcion}}
                </textarea>

            </label></br>
            <button class="botones" type="submit">Actualizar proveedor</button>
        </form>
    </fieldset>
</div>

@endsection

