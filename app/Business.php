<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
		'name', 
		'slug',
		'phone',
		'address',
		'specialty'
	]; 

	public function employees() {
		return $this->hasMany(Employee::class);
	}

	public function households() {
		return $this->hasMany(Household::class);
	}
}
