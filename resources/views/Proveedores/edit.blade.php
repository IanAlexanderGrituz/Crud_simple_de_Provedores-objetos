@extends('layouts.app')

@section('content')
<h1>Editar Proveedor</h1>
<a href="{{ route('proveedores.index') }}">Volver a pantalla de proveedores</a>

<form method="GET" action="{{ route('proveedores.edit', 1) }}">
    @csrf
    <label for="proveedor_id">Selecciona un proveedor:</label>
    <select name="proveedor_id">
        @foreach($proveedores as $proveedor)
            <option value="{{ $proveedor->id }}">{{ $proveedor->id }}</option>
        @endforeach
    </select>

    <button type="submit">Cargar datos</button>
</form>

<!-- Agregamos un formulario para eliminar -->
<form method="POST" action="{{ route('proveedores.destroy', 1) }}" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este proveedor?');">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar proveedor</button>
</form>

<!-- Formulario de edición -->
<form method="POST" action="{{ route('proveedores.update', 1) }}">
    @csrf
    @method('PUT')
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion">

    <button type="submit">Actualizar</button>
</form>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

@endsection