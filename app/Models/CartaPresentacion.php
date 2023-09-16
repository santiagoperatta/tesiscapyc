<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaPresentacion extends Model
{
	protected $table = 'carta_presentacion';
	
    use HasFactory;

	protected $fillable = [
		'area_interes',
		'objetivo_laboral',
		'user_id'
	];
}
