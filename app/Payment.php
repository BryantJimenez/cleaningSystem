<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     protected $fillable = [
		'slug', 
		'service_id',
		'household_id',
		'bank_id',
		'type_pay',
		'total',
		'reference'
	]; 

	public function householdpay() {
		return $this->hasMany(HouseholdPay::class);
	}
}
