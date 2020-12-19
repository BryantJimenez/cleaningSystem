<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
		'name', 
		'slug',
		'price'
	]; 

	public function households() {
		return $this->hasMany(Household::class);
	}
}
