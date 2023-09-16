<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CartaPresentacion;

class CrearCarta extends Component
{
	public $cartaPresentacion_id;
	public $area_interes;
    public $objetivo_laboral;

    protected $rules = [
        'area_interes' => 'required|string',
        'objetivo_laboral' => 'required|string'
    ];

	public function mount(CartaPresentacion $cartapresentacion){
		$this->cartaPresentacion_id = $cartapresentacion->id;
		$this->area_interes = $cartapresentacion->area_interes;
		$this->objetivo_laboral = $cartapresentacion->objetivo_laboral;
	}

	public function editarCarta(){
		$datos = $this->validate();

		//Encontrar vacante a editar
		$cartapresentacion = CartaPresentacion::find($this->cartaPresentacion_id);

		//Asignar valores
		$cartapresentacion->area_interes = $datos['area_interes'];
		$cartapresentacion->objetivo_laboral = $datos['objetivo_laboral'];

		//Guardar vacante
		$cartapresentacion->save();

		//Crear un msj
		session()->flash('mensaje', 'Datos guardados correctamente');

		//Redireccionar usuario
		return redirect()->route('carta_presentacion.index');
	}

    public function render()
    {
        return view('livewire.editar-carta');
    }
}
