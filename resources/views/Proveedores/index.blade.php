@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1>Proveedores</h1>

<a href="{{ route('proveedores.create') }}">Registrar nuevo proveedor</a>
<a href="{{ route('proveedores.edit', 1) }}">Editar proveedor existente</a>

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->nombre }}</td>
                <td>{{ $proveedor->direccion }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>
@endsection
