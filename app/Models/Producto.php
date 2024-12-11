<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Definir la tabla asociada a este modelo (opcional si es 'productos')
    protected $table = 'productos';

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen_url',
        'categoria',
        'marca',
    ];

}
