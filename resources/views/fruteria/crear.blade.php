@extends('fruteria.layout')

@section('titulo','Crear')

@section('contenido')
<main>
        <h1>Añadir fruta</h1>
    <form action="{{route('fruteria.store')}}" method="post">

        @csrf

        <label for="nombre">Nombre:</label><br>
        <input name="nombre" type="text" id="nombre" value="{{old('nombre')}}">
        @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>

        <label for="descripcion">Descripción:</label><br>
        <textarea name="descripcion" id="descripcion" cols="50" rows="2">{{old('descripcion')}}</textarea><br>

        <label for="precio">Precio:</label><br>
        <input name="precio" type="number" id="precio" value="{{old('precio')}}">
        @error('precio')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>

        <label for="fecha">Fecha: </label><br>
        <input name="fecha" type="date" id="fecha" value="{{old('fecha')}}">
        @error('fecha')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br><br>

        <button type="submit">Añadir</button>
    </form>
</main>
@endsection
