<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        // Aquí puedes mostrar una lista de productos si es necesario
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'foto' => 'nullable|string', // Puedes validar la foto si estás subiendo archivos
        ]);

        // Crear un nuevo producto en la base de datos
        Producto::create($request->all());

        // Redireccionar a una página de éxito o mostrar un mensaje
        return redirect()->route('producto.index')->with('success', '¡El producto se ha creado correctamente!');
    }

    // Otros métodos para mostrar, editar y eliminar un producto
}
