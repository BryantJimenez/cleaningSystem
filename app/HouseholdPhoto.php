<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseholdPhoto extends Model
{
    protected $fillable = [
		'photo', 
		'description',
		'household_id'
	]; 

	public function household() {
		return $this->belongsTo(Household::class);
	} 
}
