<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotizacion;

class CotizacionController extends Controller
{
    public function index()
    {
        // Aquí puedes mostrar una lista de cotizaciones si es necesario
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'correo_cliente' => 'required|email|max:255',
            'telefono_cliente' => 'required|string|max:20',
            'tipo_servicio' => 'required|string|max:255',
            'descripcion_servicio' => 'nullable|string',
        ]);

        // Crear una nueva cotización en la base de datos
        Cotizacion::create($request->all());

        // Redireccionar a una página de éxito o mostrar un mensaje
        return redirect()->route('cotizacion.index')->with('success', '¡La cotización se ha creado correctamente!');
    }

    // Otros métodos para mostrar, editar y eliminar una cotización
}
