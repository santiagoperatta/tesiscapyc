<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosPersonales;
use Illuminate\Support\Facades\Auth;

class DatosPersonalesController extends Controller
{
	public function index()
	{
		$datopersonal = DatosPersonales::first(); // Cambia esto según tu lógica para obtener el dato personal del usuario actual
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
		return view('cv.datos_personales.edit', [
			'datopersonal' => $datopersonal
		]);
	}
}
