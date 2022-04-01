@extends('layouts.master')
@section('title', 'Agregar Verduras')

@section('header')
    @parent
    <h2>Agregar de Verduras</h2>
@stop

@section('content')
<hr>

<div class="container">
    <div class="row">
        <div class="col col-lg-4">
            <form action="{{ url('guardarFormulario') }}" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Verdura</label>
                    <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precio">
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</div>
<hr>
@stop

@section('footer')
    <h4>Gracias por visitarno</h4>
    @parent
@stop

<hr>