<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaPresentacion extends Model
{
    use HasFactory;

	protected $fillable = [
		'area_interes',
		'objetivo_laboral',
		'user_id'
	];
}
