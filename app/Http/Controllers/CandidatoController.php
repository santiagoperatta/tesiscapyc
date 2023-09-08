<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Vacante;
use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
	public function index(Vacante $vacante){
		return view('candidatos.index', [
			'vacante' => $vacante
		]);
	}

	public function show(Candidato $candidato)
	{
		if ($candidato->user && $candidato->user->datosPersonales) {
			$estudios = $candidato->user->estudios;
			$experiencias = $candidato->user->experiencias; 
	
			// Pasa los datos del candidato y los estudios a la vista.
			return view('candidatos.show', ['candidato' => $candidato, 'estudios' => $estudios, 'experiencias' => $experiencias]);
		} else {
			abort(404); // O mostrar un mensaje de error personalizado.
		}
	}
}
