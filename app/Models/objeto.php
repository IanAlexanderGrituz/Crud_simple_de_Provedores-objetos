<?php

// app/Models/Objeto.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    protected $fillable = [
        'nombre', 'peso', 'numero_de_serie', 'provedor_id', // Asegúrate de tener el campo 'provedor_id' para la relación
    ];

    // Relación con el modelo Proveedor
    public function provedor()
    {
        return $this->belongsTo(Proveedor::class, 'provedor_id');
    }
}
