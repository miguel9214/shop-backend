<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define la tabla de la base de datos si no es la pluralización por defecto
    protected $table = 'products';

    // Define los atributos que son asignables en masa
    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    // Define los atributos que deben ser ocultos para los arrays (por ejemplo, para evitar que se devuelvan contraseñas)
    protected $hidden = [];

    // Si estás usando fechas de tipo datetime, define los atributos que son timestamps
    // public $timestamps = true; // Esto es opcional si tus tablas tienen columnas created_at y updated_at
}
