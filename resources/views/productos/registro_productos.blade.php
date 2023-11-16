@extends('layouts.dashboard')
@section('title', 'Registro producto')
@section('subtitulo', 'REGISTRO PRODUCTO')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Registro producto:</h1>
    <fieldset>
        <form action="{{route('productos.almacenar_registro')}}" method="POST">

            @csrf

            <label>
                Nombre:</br>
                <input type="text" name="nombre">
                <p class="text-danger">{{$errors->first('nombre')}}</p>
            </label>

            <label>
                Categoria:</br>
                <input type="text" name="categoria">
                <p class="text-danger">{{$errors->first('categoria')}}</p>
            </label>

            <label>
                Precio:</br>
                <input type="number" name="precio">
                <p class="text-danger">{{$errors->first('precio')}}</p>
            </label>

            <label>
                Fecha caducidad:</br>
                <input type="datetime-local" name="fecha_caducidad">
                <p class="text-danger">{{$errors->first('fecha_caducidad')}}</p>
            </label>
            <label>
                Codigo barras:</br>
                <input type="number" name="codigo_barras">
                <p class="text-danger">{{$errors->first('codigo_barras')}}</p>
            </label>
            </br>
            <label>
                Descripcion:</br>
                <textarea type="text" name="descripcion">
                </textarea>
                <p class="text-danger">{{$errors->first('descripcion')}}</p>

            </label></br>
            <button type="submit" class="botones" >Registrar producto</button>

        </form>
    </fieldset>
</div>
@endsection
