<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseholdPay extends Model
{
    protected $fillable = [
		'payment_id', 
		'days',
		'month',
		'rent_price_day',
		'rent_price_month',
		'operation'
	];

	public function household() {
		return $this->belongsTo(Household::class);
	} 

	public function paymenthousehold() {
		return $this->hasMany(Payment::class);
	}
}
