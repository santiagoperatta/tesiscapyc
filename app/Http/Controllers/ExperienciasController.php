<?php

namespace App\Http\Controllers;

use App\Models\Experiencias;
use Illuminate\Http\Request;

class ExperienciasController extends Controller
{
    public function index()
    {
        $experiencias = Experiencias::all();
        return view('cv.experiencia.index', [
            'experiencias' => $experiencias
        ]);
    }

	public function edit(Experiencias $experiencia)
    {
        return view('cv.experiencia.edit', [
			'experiencia'=>$experiencia
		]);
    }
	
	public function create()
    {
		return view('cv.experiencia.create');
    }
}
