<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SituacionLaboral extends Model
{
    use HasFactory;

	protected $fillable = [
		'situacion_laboral',
		'pretension_salarial',
		'cambiar_residencia',
		'viajar',
		'vehiculo',
		'user_id'
	];
}
