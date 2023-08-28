<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudios;
use Illuminate\Support\Carbon;

class EditarEstudios extends Component
{
	public $estudio_id;
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
        'fecha_fin_estudio' => 'required|date',
    ];

	public function mount(Estudios $estudio){
		$this->estudio_id = $estudio->id;
		$this->titulo_carrera = $estudio->titulo_carrera;
		$this->tipo_estudio = $estudio->tipo_estudio;
		$this->estado_estudio = $estudio->estado_estudio;
		$this->institucion = $estudio->institucion;
		$this->fecha_inicio_estudio = Carbon::parse ($estudio->fecha_inicio_estudio)->format('Y-m-d');
		$this->fecha_fin_estudio = Carbon::parse ($estudio->fecha_fin_estudio)->format('Y-m-d');
	}

	public function editarEstudio(){
		$datos = $this->validate();

		//Encontrar vacante a editar
		$estudio = Estudios::find($this->estudio_id);

		//Asignar valores
		$estudio->titulo_carrera = $datos['titulo_carrera'];
		$estudio->tipo_estudio = $datos['tipo_estudio'];
		$estudio->estado_estudio = $datos['estado_estudio'];
		$estudio->institucion = $datos['institucion'];
		$estudio->fecha_inicio_estudio = $datos['fecha_inicio_estudio'];
		$estudio->fecha_fin_estudio = $datos['fecha_fin_estudio'];
	

		//Guardar vacante
		$estudio->save();

		//Crear un msj
		session()->flash('mensaje', 'Datos guardados correctamente');

		//Redireccionar usuario
		return redirect()->route('estudios.index');
	}

    public function render()
    {
        return view('livewire.editar-estudios');
    }
}
