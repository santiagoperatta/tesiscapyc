<?php

namespace App\Http\Livewire;

use App\Models\Experiencias;
use Livewire\Component;

class MostrarExperiencias extends Component
{
    public $experiencias;

    public function mount()
    {
        $user = auth()->user(); // Obtener el usuario autenticado
        $this->experiencias = Experiencias::where('user_id', $user->id)->get(); // Filtrar los estudios por user_id
    }

	protected $listeners=['eliminarExperiencia'];

	public function eliminarExperiencia(Experiencias $experiencias){
		$experiencias->delete();
	}

    public function render()
    {
        return view('livewire.mostrar-experiencias');
    }
}
