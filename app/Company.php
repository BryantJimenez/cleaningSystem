<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
		'name', 
		'slug',
		'type'
	]; 

	public function households() {
		return $this->hasMany(Household::class);
	}
}
