<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        // Aquí puedes mostrar una lista de usuarios si es necesario
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_usuario' => 'required|string|max:255',
            'correo_usuario' => 'required|email|unique:usuarios|max:255',
            'contrasena' => 'required|string|min:6|max:255',
            'tipo_usuario' => 'required|in:admin,normal',
        ]);

        // Crear un nuevo usuario en la base de datos
        Usuario::create([
            'nombre_usuario' => $request->nombre_usuario,
            'correo_usuario' => $request->correo_usuario,
            'contrasena' => bcrypt($request->contrasena), // Se encripta la contraseña
            'tipo_usuario' => $request->tipo_usuario,
        ]);

        // Redireccionar a una página de éxito o mostrar un mensaje
        return redirect()->route('usuario.index')->with('success', '¡El usuario se ha creado correctamente!');
    }

    // Otros métodos para mostrar, editar y eliminar un usuario
}
