<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DatosPersonales extends Model
{
    use HasFactory;

	protected $casts = [ 'fecha_nacimiento'=>'date'];

	protected $fillable = [
		'nombre',
		'apellido',
		'telefono',
		'dni',
		'fecha_nacimiento',
		'sexo',
		'provincia',
		'localidad',
		'direccion',
		'imagen',
		'user_id'
	];
}