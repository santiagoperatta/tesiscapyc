<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SituacionLaboral;

class CrearSituacionLaboral extends Component
{
	public $situacion_laboral;
    public $pretension_salarial;
    public $cambiar_residencia;
    public $viajar;
    public $vehiculo;

    protected $rules = [
        'situacion_laboral' => 'required|string',
        'pretension_salarial' => 'required|string',
        'cambiar_residencia' => 'required|bool',
        'viajar' => 'required|bool',
        'vehiculo' => 'required|bool',
    ];

	public function crearSituacionLaboral(){
		$datos = $this->validate();

		SituacionLaboral::create([
			'situacion_laboral'=> $datos['situacion_laboral'],
			'pretension_salarial'=> $datos['pretension_salarial'],
			'cambiar_residencia'=> $datos['cambiar_residencia'],
			'viajar'=> $datos['viajar'],
			'vehiculo'=> $datos['vehiculo'],
		]);

		//Crear un msj
		session()->flash('mensaje', 'Datos guardados correctamente');

		//Redireccionar usuario
		return redirect()->route('situacion_laboral.index');
	}

    public function render()
    {
        return view('livewire.crear-situacion-laboral');
    }
}
