
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1>Crear Objeto</h1>

<a href="{{ route('objetos.index') }}">Volver a Lista de Objetos</a>

<form method="POST" action="{{ route('objetos.store') }}">
    @csrf

    <label for="nombre">Nombre del Objeto:</label>
    <input type="text" name="nombre" required>

    <label for="peso">Peso:</label>
    <input type="number" name="peso" required>

    <label for="numero_de_serie">Número de Serie:</label>
    <input type="text" name="numero_de_serie" value="{{ mt_rand(100000, 999999) }}" readonly>

    <label for="provedor_id">Proveedor:</label>
    <select name="provedor_id" required>
        @foreach($proveedores as $proveedor)
            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
        @endforeach
    </select>

    <button type="submit">Crear Objeto</button>
</form>
    
    </div>
</div>
@endsection
