@extends('fruteria.layout')

@section('titulo',$fruta->Nombre)

@section('contenido')
    <main>
        <h1>Editar fruta</h1>
        <form action="{{route('fruteria.update',$fruta)}}" method="post">

            @csrf

            @method('put')

            <label for="nombre">Nombre:</label><br>
            <input name="nombre" type="text" id="nombre" value="{{old('nombre',$fruta->nombre)}}">
            @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>

            <label for="descripcion">Descripción:</label><br>
            <textarea name="descripcion" id="descripcion" cols="100" rows="1">{{old('descripcion',$fruta->descripcion)}}</textarea><br>

            <label for="precio">Precio:</label><br>
            <input name="precio" type="number" id="precio" value="{{old('precio', $fruta->precio)}}">
            @error('precio')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>

            <label for="fecha">Fecha: </label><br>
            <input name="fecha" type="date" id="fecha" value="{{old('fecha', $fruta->fecha)}}">
            @error('fecha')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br><br>

            <button type="submit">Editar</button>
        </form>
    </main>
@endsection

