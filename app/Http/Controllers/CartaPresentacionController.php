<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartaPresentacion;

class CartaPresentacionController extends Controller
{
    public function index()
    {
        $carta_presentacion = CartaPresentacion::all();
        return view('cv.carta_presentacion.index', [
            'carta_presentacion' => $carta_presentacion
        ]);
    }

	public function edit(CartaPresentacion $carta_presentacion)
    {
        return view('cv.carta_presentacion.edit', [
			'carta_presentacion'=>$carta_presentacion
		]);
    }
	
	public function create()
    {
		return view('cv.carta_presentacion.create');
    }
}
