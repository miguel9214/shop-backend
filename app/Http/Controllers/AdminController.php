<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Mostrar una vista de administración.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Ejemplo de cómo podrías devolver información administrativa
        // Esto puede ser adaptado según las necesidades específicas
        $stats = [
            'total_users' => \App\Models\User::count(),
            'total_products' => \App\Models\Product::count(),
            // Agrega otras estadísticas según sea necesario
        ];

        return response()->json($stats);
    }

    // Puedes agregar otros métodos relacionados con la administración aquí
}
