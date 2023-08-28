<?php

namespace App\Http\Livewire;

use App\Models\Estudios;
use Livewire\Component;

class CrearEstudios extends Component
{
	public $titulo_carrera;
    public $tipo_estudio;
    public $estado_estudio;
    public $institucion;
    public $fecha_inicio_estudio;
    public $fecha_fin_estudio;

    protected $rules = [
        'titulo_carrera' => 'required|string',
        'tipo_estudio' => 'required|string',
        'estado_estudio' => 'required|string',
        'institucion' => 'required|string',
        'fecha_inicio_estudio' => 'required|date',
        'fecha_fin_estudio' => 'nullable|date'
    ];

	public function crearEstudio(){
		$datos = $this->validate();

		//Crear estudio
		Estudios::create([
			'titulo_carrera'=> $datos['titulo_carrera'],
			'tipo_estudio'=> $datos['tipo_estudio'],
			'estado_estudio'=> $datos['estado_estudio'],
			'institucion'=> $datos['institucion'],
			'fecha_inicio_estudio'=> $datos['fecha_inicio_estudio'],
			'fecha_fin_estudio'=> $datos['fecha_fin_estudio'],
			'user_id' => auth()->user()->id,
		]);

		//Crear un msj
		session()->flash('mensaje', 'Estudio guardado correctamente');

		//Redireccionar usuario
		return redirect()->route('estudios.index');
	}

    public function render()
    {
        return view('livewire.crear-estudios');
    }
}
