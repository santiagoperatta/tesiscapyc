<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Experiencias;
use Illuminate\Support\Carbon;

class EditarExperiencias extends Component
{
	public $experiencia_id;
	public $empresa;
    public $categoria;
    public $puesto;
    public $descripcion;
    public $fecha_inicio_experiencia;
    public $fecha_fin_experiencia;

    protected $rules = [
        'empresa' => 'required|string',
        'categoria' => 'required',
        'puesto' => 'required|string',
        'descripcion' => 'required|string',
        'fecha_inicio_experiencia' => 'required|date',
        'fecha_fin_experiencia' => 'nullable|date'
    ];

	public function mount(Experiencias $experiencia){
		$this->experiencia_id = $experiencia->id;
		$this->empresa = $experiencia->empresa;
		$this->categoria = $experiencia->categoria_id;
		$this->puesto = $experiencia->puesto;
		$this->descripcion = $experiencia->descripcion;
		$this->fecha_inicio_experiencia = Carbon::parse ($experiencia->fecha_inicio_experiencia)->format('Y-m-d');
		$this->fecha_fin_experiencia = Carbon::parse ($experiencia->fecha_fin_experiencia)->format('Y-m-d');
	}

	public function editarExperiencia(){
		$datos=$this->validate();

		//Encontrar vacante a editar
		$experiencia = Experiencias::find($this->experiencia_id);

		//Asignar valores
		$experiencia->empresa = $datos['empresa'];
		$experiencia->categoria_id = $datos['categoria'];
		$experiencia->puesto = $datos['puesto'];
		$experiencia->descripcion = $datos['descripcion'];
		$experiencia->fecha_inicio_experiencia = $datos['fecha_inicio_experiencia'];
		$experiencia->fecha_fin_experiencia = $datos['fecha_fin_experiencia'];

		//Guardar vacante
		$experiencia->save();

		//redireccionar
		session()->flash('mensaje', 'La experiencia se guardo correctamente');

		return redirect()->route('experiencias.index');
	}

    public function render()
    {
		$categorias=Categoria::all();

        return view('livewire.editar-experiencias',[
			'categorias'=>$categorias
		]);
    }
}
