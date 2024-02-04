@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1>Editar Objeto</h1>

<a href="{{ route('objetos.index') }}">Volver a Lista de Objetos</a>

<form method="POST" action="{{ route('objetos.update', $objeto->id) }}">
    @csrf
    @method('PUT')

    <label for="nombre">Nombre del Objeto:</label>
    <input type="text" name="nombre" value="{{ $objeto->nombre }}" required>

    <label for="peso">Peso:</label>
    <input type="number" name="peso" value="{{ $objeto->peso }}" required>

    <label for="numero_de_serie">Número de Serie:</label>
    <input type="text" name="numero_de_serie" value="{{ $objeto->numero_de_serie }}" readonly>

    <label for="provedor_id">Proveedor:</label>
    <select name="provedor_id" required>
        @foreach($proveedores as $proveedor)
            <option value="{{ $proveedor->id }}" @if($objeto->provedor_id == $proveedor->id) selected @endif>{{ $proveedor->nombre }}</option>
        @endforeach
    </select>

    <button type="submit">Guardar Cambios</button>
</form>
    </div>
</div>
@endsection
