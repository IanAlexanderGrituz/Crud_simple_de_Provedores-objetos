
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
    <h1>Bienvenido a la Aplicación</h1>

<a href="{{ route('proveedores.index') }}">
    <button>Ir al menú de proveedores</button>
</a>

<a href="{{ route('objetos.index') }}"> <button>Ir a Lista de Objetos</button></a>

    </div>
</div>
@endsection
