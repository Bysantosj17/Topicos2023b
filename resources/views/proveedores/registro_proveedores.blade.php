@extends('layouts.dashboard')
@section('title', 'Registro proveedor')
@section('subtitulo', 'REGISTRO PROVEEDOR')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Registro proveedor:</h1>
    <fieldset>
        <form action="" method="POST">

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
                Direccion:</br>
                <input type="text" name="direccion">
            </label>

            <label>
                Compañia:</br>
                <input type="text" name="compania">
            </label>
            <br>
            <label>
                Descripcion:</br>
                <textarea type="text" name="descripcion">
                </textarea>
            </label></br>
            <button type="submit">Registrar proveedor</button>
        </form>
    </fieldset>
</div>
@endsection

