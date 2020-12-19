<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
		'business_id',
		'name',
		'lastname', 
		'slug',
		'phone',
		'email',
		'address',
		'dni'
	]; 

	public function business() {
		return $this->belongsTo(business::class);
	}
}
