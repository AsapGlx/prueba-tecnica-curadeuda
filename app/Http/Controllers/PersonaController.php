<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    // Constructor que aplica el middleware 'auth'
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Muestra el listado de personas
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    // Muestra el formulario para crear una nueva persona
    public function create()
    {
        return view('personas.create');
    }

    // Almacena una nueva persona en la base de datos
    public function store(Request $request)
    {
        $validated = $request->validate([
            'primer_nombre'   => 'required|string|max:50',
            'segundo_nombre'  => 'nullable|string|max:50',
            'apellido'        => 'required|string|max:50',
            'email'           => 'required|email|max:100|unique:personas,email',
            'telefono'        => 'nullable|string|max:20',
            'fecha_nacimiento'=> 'nullable|date',
            'genero'          => 'required|in:M,F,O',
            'direccion'       => 'nullable|string|max:150',
            'ciudad'          => 'nullable|string|max:50',
            'estado'          => 'nullable|string|max:50',
            'pais'            => 'nullable|string|max:50'
        ]);

        Persona::create($validated);

        return redirect()->route('personas.index')
            ->with('success', 'Persona creada exitosamente.');
    }

    // Muestra la información de una persona específica
    public function show(Persona $persona)
    {
        return view('personas.show', compact('persona'));
    }

    // Muestra el formulario para editar una persona
    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    // Actualiza la información de una persona en la base de datos
    public function update(Request $request, Persona $persona)
    {
        $validated = $request->validate([
            'primer_nombre'   => 'required|string|max:50',
            'segundo_nombre'  => 'nullable|string|max:50',
            'apellido'        => 'required|string|max:50',
            'email'           => 'required|email|max:100|unique:personas,email,' . $persona->id,
            'telefono'        => 'nullable|string|max:20',
            'fecha_nacimiento'=> 'nullable|date',
            'genero'          => 'required|in:M,F,O',
            'direccion'       => 'nullable|string|max:150',
            'ciudad'          => 'nullable|string|max:50',
            'estado'          => 'nullable|string|max:50',
            'pais'            => 'nullable|string|max:50'
        ]);

        $persona->update($validated);

        return redirect()->route('personas.index')
            ->with('success', 'Persona actualizada exitosamente.');
    }

    // Elimina una persona de la base de datos
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')
            ->with('success', 'Persona eliminada exitosamente.');
    }
}
