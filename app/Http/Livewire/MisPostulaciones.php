<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Postulacion;

class MisPostulaciones extends Component
{
	public function index()
	{
		// Obtener las postulaciones del usuario actual
		$postulaciones = auth()->user()->postulaciones;
	
		return view('mis-postulaciones.index', ['postulaciones' => $postulaciones]);
	}
}
