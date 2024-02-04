<?php

// app/Models/Proveedor.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';

    protected $fillable = [
        'nombre', 'direccion', // Agrega cualquier otro campo que necesites para los proveedores
    ];
}