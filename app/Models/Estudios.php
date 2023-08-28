<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudios extends Model
{
    use HasFactory;

	protected $casts = [ 'fecha_inicio_estudio'=>'date', 'fecha_fin_estudio'=>'date'];

	protected $fillable = [
		'titulo_carrera',
		'tipo_estudio',
		'estado_estudio',
		'institucion',
		'fecha_inicio_estudio',
		'fecha_fin_estudio',
		'user_id'
	];
}
