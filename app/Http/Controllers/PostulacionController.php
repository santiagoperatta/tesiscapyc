<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidato;

class PostulacionController extends Controller
{
	public function index()
	{
		// Obtener las postulaciones del usuario actual
		$user = auth()->user();
		$postulaciones = $user->postulaciones;
	
		return view('mis_postulaciones.index', compact('postulaciones'));
	}
}