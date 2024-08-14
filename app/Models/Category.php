<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

        // Define la tabla de la base de datos si no es la pluralización por defecto
        protected $table = 'categories';

        // Define los atributos que son asignables en masa
        protected $fillable = [
            'name',
        ];
}
