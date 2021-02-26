<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
		'name', 
		'code',
		'slug'
	]; 

	public function payment() {
        return $this->hasMany(Payment::class);
    }
}
