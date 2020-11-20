@extends('fruteria.layout')

@section('titulo', 'Fruta')

@section('contenido')
    <main>
        <h1><strong>{{$fruta->nombre}}</strong></h1>
        <p><b>Descripción:</b> {{$fruta->descripcion}}</p>
        <p><b>Precio:</b> {{$fruta->precio}}</p>
        <p><b>Fecha:</b> {{$fruta->fecha}}</p>
    </main>
@endsection
