<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    use HasFactory;

	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
	public function vacante()
	{
		return $this->belongsTo(Vacante::class);
	}
}
