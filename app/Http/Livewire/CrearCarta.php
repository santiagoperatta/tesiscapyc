<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CartaPresentacion;

class CrearCarta extends Component
{
	public $area_interes;
    public $objetivo_laboral;

    protected $rules = [
        'area_interes' => 'required|string',
        'objetivo_laboral' => 'required|string'
    ];

	public function crearCarta(){
		$datos = $this->validate();

		//Crear vacante
		CartaPresentacion::create([
			'area_interes'=> $datos['area_interes'],
			'objetivo_laboral'=> $datos['objetivo_laboral'],
			'user_id' => auth()->user()->id,
		]);

		//Crear un msj
		session()->flash('mensaje', 'Datos guardados correctamente');

		//Redireccionar usuario
		return redirect()->back();
	}

    public function render()
    {
        return view('livewire.crear-carta');
    }
}
