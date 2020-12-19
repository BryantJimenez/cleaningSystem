<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
		'name', 
		'slug',
		'photo',
		'description',
		'sale',
		'square_meter'
	];  
 
	public function households() {
		return $this->hasMany(Household::class);
	}

	public function pays() {
		return $this->hasMany(ServicePay::class);
	}
}
