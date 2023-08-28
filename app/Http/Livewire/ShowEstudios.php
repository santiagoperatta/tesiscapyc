<?php

namespace App\Http\Livewire;

use App\Models\Estudios;
use Livewire\Component;

class ShowEstudios extends Component
{
    public $estudios;

    public function mount()
    {
        $user = auth()->user(); // Obtener el usuario autenticado
        $this->estudios = Estudios::where('user_id', $user->id)->get(); // Filtrar los estudios por user_id
    }

	protected $listeners=['eliminarEstudio'];

	public function eliminarEstudio(Estudios $estudios){
		$estudios->delete();
	}

    public function render()
    {
        return view('livewire.show-estudios');
    }
}
