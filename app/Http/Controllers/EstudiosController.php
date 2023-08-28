<?php

namespace App\Http\Controllers;

use App\Models\Estudios;
use Illuminate\Http\Request;

class EstudiosController extends Controller
{
	public function index()
    {
        $estudios = Estudios::all();
        return view('cv.estudios.index', [
            'estudios' => $estudios
        ]);
    }

	public function edit(Estudios $estudio)
    {
        return view('cv.estudios.edit', [
			'estudio'=>$estudio
		]);
    }
	
	public function create()
    {
		return view('cv.estudios.create');
    }
}
