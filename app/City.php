<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
		'name', 
		'province_id'
	]; 

	 public function province() {
		return $this->belongsTo(Province::class);
	}
}
