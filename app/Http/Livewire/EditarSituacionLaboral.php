<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SituacionLaboral;

class EditarSituacionLaboral extends Component
{
	public $situacionLaboral_id;
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

	public function mount(SituacionLaboral $situacionlaboral){
	$this->situacionLaboral_id = $situacionlaboral->id;
	$this->situacion_laboral = $situacionlaboral->situacion_laboral;
	$this->pretension_salarial = $situacionlaboral->pretension_salarial;
	$this->cambiar_residencia = $situacionlaboral->cambiar_residencia;
	$this->viajar = $situacionlaboral->viajar;
	$this->vehiculo = $situacionlaboral->vehiculo;
	}

	public function editarSituacionLaboral(){
		$datos = $this->validate();

		$situacionlaboral = SituacionLaboral::find($this->situacionLaboral_id);

		$situacionlaboral->situacion_laboral = $datos['situacion_laboral'];
		$situacionlaboral->pretension_salarial = $datos['pretension_salarial'];
		$situacionlaboral->cambiar_residencia = $datos['cambiar_residencia'];
		$situacionlaboral->viajar = $datos['viajar'];
		$situacionlaboral->vehiculo = $datos['vehiculo'];

		//Crear un msj
		session()->flash('mensaje', 'Datos guardados correctamente');

		//Redireccionar usuario
		return redirect()->route('situacion_laboral.index');
	}

    public function render()
    {
        return view('livewire.editar-situacion-laboral');
    }
}
