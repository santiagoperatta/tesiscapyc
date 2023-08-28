<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencias extends Model
{
    use HasFactory;

	protected $casts = [ 'fecha_inicio_experiencia'=>'date', 'fecha_fin_experiencia'=>'date'];

	protected $fillable = [
		'empresa',
		'categoria_id',
		'puesto',
		'descripcion',
		'fecha_inicio_experiencia',
		'fecha_fin_experiencia',
		'user_id'
	];

	public function categoria(){
		return $this->belongsTo(Categoria::class);
	}

}
