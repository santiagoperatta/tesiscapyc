<?php

namespace App\Http\Controllers;

use App\Models\SituacionLaboral;
use Illuminate\Http\Request;

class SituacionLaboralController extends Controller
{
    public function index()
    {
        $situacionlaboral = SituacionLaboral::all();
        return view('cv.situacion_laboral.index', [
            'situacionlaboral' => $situacionlaboral
        ]);
    }

	public function edit(SituacionLaboral $situacionlaboral)
    {
        return view('cv.situacionlaboral.edit', [
			'situacionlaboral'=>$situacionlaboral
		]);
    }
	
	public function create()
    {
		return view('cv.situacion_laboral.create');
    }
}
