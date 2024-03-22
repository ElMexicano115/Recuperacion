<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use Illuminate\Support\Facades\Storage;

class mascotaController extends Controller
{
    public function index(){
        $mascotas = Mascota::all();
        return view('index', compact('mascotas'));
    }

    public function create()
    {
        return view('ingreso');
    }

    public function store(Request $request)
    {
        $request->validate([

            'nombre',
            'tipo',
            'raza',
            'edad',
            'color',
            'foto' => 'image', // foto de la mascota
            'nombre_dueño',
            'foto_dueño' => 'image',
        ]);

        $filename = '';

        // Guardar imagen en la carpeta storage/img
        if ($request->hasFile('foto')) {
            $filename = $request->getSchemeAndHttpHost() . '/storage/img/' . $request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('storage/img'), $filename);
        }

        $filename = '';

        // Guardar imagen en la carpeta storage/img
        if ($request->hasFile('foto_dueño')) {
            $filename = $request->getSchemeAndHttpHost() . '/storage/dueño/' . $request->file('foto_dueño')->getClientOriginalName();
            $request->foto_dueño->move(public_path('storage/dueño'), $filename);
        }
        
        // Crea un nuevo libro con los datos del formulario
        $mascota = new Mascota();
        $mascota->nombre = $request->nombre;
        $mascota->tipo = $request->tipo;
        $mascota->raza = $request->raza;
        $mascota->edad = $request->edad;
        $mascota->color = $request->color;
        $mascota->foto = $request->foto->getClientOriginalName();
        $mascota->nombre_dueño = $request->nombre_dueño;
        $mascota->foto_dueño = $request->foto_dueño->getClientOriginalName();

        $mascota->save();
        

        // Redirecciona al usuario de vuelta al formulario de creación con un mensaje de éxito
        return redirect()->route('index')->with('success', 'Libro creado exitosamente.');
    }
}
