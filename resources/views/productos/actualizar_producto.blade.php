@extends('layouts.dashboard')
@section('title', 'Editar producto')
@section('subtitulo', 'EDITAR PRODUCTO')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Registro producto:</h1>
    <fieldset>
        <form action="{{route('productos.actualizar', $producto)}}" method="POST">

            @csrf

            @method('put')

            <label>
                Nombre:</br>
                <input type="text" name="nombre" value="{{$producto->nombre}}">
            </label>

            <label>
                Categoria:</br>
                <input type="text" name="categoria" value="{{$producto->categoria}}">
            </label>

            <label>
                Precio:</br>
                <input type="number" name="precio" value="{{$producto->precio}}">
            </label>

            <label>
                Fecha caducidad:</br>
                <input type="datetime-local" name="fecha_caducidad" value="{{$producto->fecha_caducidad}}">
            </label>
            <label>
                Codigo barras:</br>
                <input type="number" name="codigo_barras" value="{{$producto->codigo_barras}}">
            </label>
            </br>
            <label>
                Descripcion:</br>
                <textarea type="text" name="descripcion">{{$producto->descripcion}}
                </textarea>
            </label></br>
            <button type="submit" class="botones" >Actualizar producto</button>
        </form>
    </fieldset>
</div>
@endsection
