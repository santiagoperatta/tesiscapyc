<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosPersonales;
use Illuminate\Support\Facades\Auth;

class DatosPersonalesController extends Controller
{
	public function index()
	{
		$user = Auth::user(); // Obtener el usuario actualmente autenticado
		$datopersonal = $user->datosPersonales; // Obtener los datos personales del usuario
	
		return view('cv.index', [
			'datopersonal' => $datopersonal
		]);
	}

    public function create()
    {
		return view('cv.datos_personales.create');
    }

	public function edit(DatosPersonales $datopersonal)
{
    // Verificar si el usuario autenticado es el propietario de los datos personales
    if (Auth::id() !== $datopersonal->user_id) {
        abort(403, 'No tienes permiso para editar estos datos personales.');
    }

    return view('cv.datos_personales.edit', [
        'datopersonal' => $datopersonal
    ]);
}
}
