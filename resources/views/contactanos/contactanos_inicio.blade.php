@extends('layouts.dashboard')
@section('title', 'Contactanos')
@section('subtitulo', 'CONTACTANOS')
@section('content-dashboard')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <h1>Contactanos</h1>
    <form action="{{route('contactanos.registro')}}" method="POST">

        @csrf

        <label>
            <h3>Nombre:</h3>
            <input type="text" name="nombres" value="{{ old('nombres') }}">
        </label>

        @error('nombres')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>

        <label>
            <h3>Correo:</h3>
            <input type="email" name="correo" value="{{old('correo') }}">
        </label>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>

        <label>
            <h3>Mensaje:</h3>
            <textarea name="mensaje" rows="3">{{ old('mensaje') }}</textarea>
        </label>
        <br>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <button class="botones" type="submit">
            Enviar mensaje
        </button>
    </form>

    @if(session('info'))

        <script>
            alert("{{ session('info') }}");
        </script>

    @endif
@endsection

