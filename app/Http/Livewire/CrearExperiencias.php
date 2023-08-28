<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Experiencias;

class CrearExperiencias extends Component
{
	public $empresa;
    public $categoria;
    public $puesto;
    public $descripcion;
    public $fecha_inicio_experiencia;
    public $fecha_fin_experiencia;

    protected $rules = [
        'empresa' => 'required|string',
        'categoria' => 'required',
        'puesto' => 'required|string',
        'descripcion' => 'required|string',
        'fecha_inicio_experiencia' => 'required|date',
        'fecha_fin_experiencia' => 'nullable|date'
    ];

	public function crearExperiencia(){
		$datos = $this->validate();

		//Crear experiencia
		Experiencias::create([
			'empresa'=> $datos['empresa'],
			'categoria_id'=> $datos['categoria'],
			'puesto'=> $datos['puesto'],
			'descripcion'=> $datos['descripcion'],
			'fecha_inicio_experiencia'=> $datos['fecha_inicio_experiencia'],
			'fecha_fin_experiencia'=> $datos['fecha_fin_experiencia'],
			'user_id' => auth()->user()->id,
		]);

		//Crear un msj
		session()->flash('mensaje', 'Experiencia guardada correctamente');

		//Redireccionar usuario
		return redirect()->route('experiencias.index');
	}
	
    public function render()
    {
		$categorias=Categoria::all();
        return view('livewire.crear-experiencias',[
			'categorias'=>$categorias
		]);
    }
}
