<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>
</head>
<body>
    
</body>
</html>





@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
 
    <h1>Objetos</h1>

<a href="{{ route('objetos.create') }}">Crear Nuevo Objeto</a>

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Peso</th>
            <th>Número de Serie</th>
            <th>Proveedor</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($objetos as $objeto)
            <tr>
                <td>{{ $objeto->nombre }}</td>
                <td>{{ $objeto->peso }}</td>
                <td>{{ $objeto->numero_de_serie }}</td>
                <td>{{ $objeto->provedor->nombre }}</td>
                <td>
                    <a href="{{ route('objetos.edit', $objeto->id) }}">Editar</a>
                    <!-- Agregamos un formulario para eliminar -->
                    <form method="POST" action="{{ route('objetos.destroy', $objeto->id) }}" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este objeto?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


    </div>
</div>
@endsection
