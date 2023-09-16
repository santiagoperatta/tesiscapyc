<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartaPresentacion;
use Illuminate\Support\Facades\Auth;

class CartaPresentacionController extends Controller
{
	public function index()
	{
		$user = Auth::user(); // Obtener el usuario actualmente autenticado
		$cartapresentacion = $user->cartaPresentacion; // Obtener los datos personales del usuario
	
        return view('cv.carta_presentacion.index', [
            'cartapresentacion' => $cartapresentacion
        ]);
	}

	public function edit(CartaPresentacion $cartapresentacion)
	{
    // Verificar si el usuario autenticado es el propietario de los datos personales
    if (Auth::id() !== $cartapresentacion->user_id) {
        abort(403, 'No tienes permiso para editar estos datos personales.');
    }

    return view('cv.carta_presentacion.edit', [
        'cartapresentacion' => $cartapresentacion
    ]);
	}
	
	public function create()
    {
		return view('cv.carta_presentacion.create');
    }
}
