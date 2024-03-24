<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function index()
    {
        // Aquí puedes mostrar una lista de contactos si es necesario
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
            'servicio_solicitado' => 'required|string|max:255',
            'comentarios' => 'nullable|string',
        ]);

        // Crear un nuevo contacto en la base de datos
        Contacto::create($request->all());

        // Redireccionar a una página de éxito o mostrar un mensaje
        return redirect()->route('contacto.index')->with('success', '¡El contacto se ha creado correctamente!');
    }

    // Otros métodos para mostrar, editar y eliminar un contacto
}