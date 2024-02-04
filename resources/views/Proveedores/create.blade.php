@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
    <h1>Crear Nuevo Proveedor</h1>

    <a href="{{ route('proveedores.index') }}">Volver a pantalla de proveedores</a>

    <form method="POST" action="{{ route('proveedores.store') }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion">

        <button type="submit">Enviar</button>
    </form>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    </div>
</div>
@endsection
