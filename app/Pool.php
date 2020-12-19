<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    protected $fillable = [
		'name', 
		'slug'
	]; 

	public function households() {
		return $this->hasMany(Household::class);
	}
}
