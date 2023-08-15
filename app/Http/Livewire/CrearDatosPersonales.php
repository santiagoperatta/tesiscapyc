<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DatosPersonales;

class CrearDatosPersonales extends Component
{
	public $nombre;
    public $apellido;
    public $telefono;
    public $dni;
    public $fecha_nacimiento;
    public $sexo;
    public $provincia;
    public $localidad;
    public $direccion;
	public $imagen;

	use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'apellido' => 'required|string',
        'telefono' => 'required|string',
        'dni' => 'required|string',
        'fecha_nacimiento' => 'required|date',
        'sexo' => 'required|string',
        'provincia' => 'required|string',
        'localidad' => 'required|string',
        'direccion' => 'required|string',
		'imagen' => 'required|image|max:1024',
    ];

	public function crearDatos(){
		$datos = $this->validate();

		//Almacenar imagen
		$imagen=$this->imagen->store('public/fotosperfil');
		$datos['imagen']=str_replace('public/fotosperfil/', '', $imagen);

		//Crear vacante
		DatosPersonales::create([
			'nombre'=> $datos['nombre'],
			'apellido'=> $datos['apellido'],
			'telefono'=> $datos['telefono'],
			'dni'=> $datos['dni'],
			'fecha_nacimiento'=> $datos['fecha_nacimiento'],
			'sexo'=> $datos['sexo'],
			'provincia'=> $datos['provincia'],
			'localidad'=> $datos['localidad'],
			'sexo'=> $datos['sexo'],
			'direccion'=> $datos['direccion'],
			'imagen'=> $datos['imagen'],
			'user_id' => auth()->user()->id,
		]);

		//Crear un msj
		session()->flash('mensaje', 'Datos guardados correctamente');

		//Redireccionar usuario
		return redirect()->route('datos_personales.index');
	}

    public function render()
    {
        return view('livewire.crear-datos-personales');
    }
}
