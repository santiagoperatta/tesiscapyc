<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use App\Notifications\NuevoCandidato;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;
    
    public $cv;
    public $vacante;
    public $yaPostulado = false; // Propiedad para rastrear si el usuario ya se postuló

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function mount(Vacante $vacante)
    {
        $this->vacante = $vacante;
        
        // Verificar si el usuario ya se ha postulado a esta vacante
        $postulacionExistente = $vacante->candidatos()
            ->where('user_id', auth()->user()->id)
            ->exists();
        
        $this->yaPostulado = $postulacionExistente;
    }

    public function postularme()
    {
        if ($this->yaPostulado) {
            session()->flash('mensaje', 'Ya estás postulado a esta vacante. ¡Buena suerte!');
            return redirect()->back();
        }
        
        $datos = $this->validate();

        //almacenar cv en el disco duro
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);

        //crear candidato a vacante
        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $datos['cv']
        ]);

        //crear notificacion y enviar mail
        $this->vacante->reclutador->notify(new NuevoCandidato($this->vacante->id, $this->vacante->titulo, auth()->user()->id));

        //mostrar un mensaje de OK
        session()->flash('mensaje', 'Tu CV se cargó con éxito.');
        return redirect()->back();
    }

	public function cancelarPostulacion()
	{
		// Eliminar la postulación
		$this->vacante->candidatos()
			->where('user_id', auth()->user()->id)
			->delete();

		// Actualizar el estado de postulación
		$this->yaPostulado = false;

		session()->flash('mensaje', 'Has cancelado tu postulación a esta vacante.');
		return redirect()->back();
	}

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}