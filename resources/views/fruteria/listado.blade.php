@extends('fruteria.layout')

@section('titulo','Lista')

@section('contenido')
<main>
    <h1>Listado de frutas</h1>
        <ul>
        @foreach($frutas as $fruta)
            <li>
                <a href="{{route('fruteria.show',$fruta)}}">{{$fruta->nombre}}</a>
                <a href="{{route('fruteria.edit',$fruta)}}">Editar</a>
                <form action="{{route('fruteria.destroy',$fruta)}}" method="post" style="display: inline">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>

            </li>
        @endforeach
        </ul>
    {{$frutas->links()}}
</main>
@endsection
