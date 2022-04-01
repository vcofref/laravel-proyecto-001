@extends('layouts.master')
@section('title', 'Verduras')

@section('header')
    @parent
    <h2>Listado de Verduras</h2>
@stop

@section('content')

    <div>
        @foreach($verduras as $verdura)
            <p>{{ $verdura }}</p>
        @endforeach
    </div>

    <hr>

    <a href="{{ action('App\Http\Controllers\VerdurasController@agregar') }}">Agregar</a>
    <a href="{{ action('App\Http\Controllers\VerdurasController@agregar') }}">Editar</a>

    <a href="{{ route('eliminarVerdura') }}">Eliminar</a>
    




@stop

@section('footer')
    <h4>Gracias por visitarno</h4>
    @parent
@stop