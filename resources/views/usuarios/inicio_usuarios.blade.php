@extends('layouts.dashboard')
@section('title', 'INICIO USUARIOS')
@section('subtitulo', 'INICIO USUARIOS')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Inicio usuario</h1>
    <h2><a href="{{route('usuarios.registro')}}">Crear un nuevo usuario</a></h2>
    <div class="tabla_resultados">
        <table>
            @foreach ($usuarios as $usuario)
            <tr>
                <td><h5><a href="{{route('usuarios.detalle', $usuario)}}"> {{$usuario->name}} </a></td></h5>
                <td><a class="botones" href="#">Editar</a></td>
                <td>
                    <form action="{{route('usuarios.eliminar', $usuario)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="botones_eliminar" type="submit"
                        onclick="return confirm('Estás seguro que deseas eliminar el usuario: {{$usuario->name}}?');">Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>
    <br><br>
    <div class="card-body">
        {{$usuarios->links()}}
@endsection
