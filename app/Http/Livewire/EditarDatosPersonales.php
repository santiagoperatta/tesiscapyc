<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DatosPersonales;
use Illuminate\Support\Carbon;

class EditarDatosPersonales extends Component
{
	public $datosPersonales_id;
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
	public $imagen_nueva;

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
		'imagen_nueva' => 'nullable|image|max:1024',
    ];

	public function mount(DatosPersonales $datopersonal){
		$this->datosPersonales_id = $datopersonal->id;
		$this->nombre = $datopersonal->nombre;
		$this->apellido = $datopersonal->apellido;
		$this->telefono = $datopersonal->telefono;
		$this->dni = $datopersonal->dni;
		$this->fecha_nacimiento = Carbon::parse ($datopersonal->fecha_nacimiento)->format('Y-m-d');
		$this->sexo = $datopersonal->sexo;
		$this->provincia = $datopersonal->provincia;
		$this->localidad = $datopersonal->localidad;
		$this->direccion = $datopersonal->direccion;
		$this->imagen = $datopersonal->imagen;
	}

	public function editarDatos(){
		$datos = $this->validate();

		//Almacenar imagen
		$imagen=$this->imagen_nueva->store('public/fotosperfil');
		$datos['imagen']=str_replace('public/fotosperfil/', '', $imagen);

		//Encontrar vacante a editar
		$datopersonal = DatosPersonales::find($this->datosPersonales_id);

		//Asignar valores
		$datopersonal->nombre = $datos['nombre'];
		$datopersonal->apellido = $datos['apellido'];
		$datopersonal->telefono = $datos['telefono'];
		$datopersonal->dni = $datos['dni'];
		$datopersonal->fecha_nacimiento = $datos['fecha_nacimiento'];
		$datopersonal->sexo = $datos['sexo'];
		$datopersonal->provincia = $datos['provincia'];
		$datopersonal->localidad = $datos['localidad'];
		$datopersonal->direccion = $datos['direccion'];
		$datopersonal->imagen = $datos['imagen'] ?? $datopersonal->imagen;

		//Guardar vacante
		$datopersonal->save();

		//Crear un msj
		session()->flash('mensaje', 'Datos guardados correctamente');

		//Redireccionar usuario
		return redirect()->route('datos_personales.index');
	}

    public function render()
    {
        return view('livewire.editar-datos-personales');
    }
}
