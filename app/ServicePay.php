<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePay extends Model
{
    protected $fillable = [
		'payment_id', 
		'business_id',
		'employees_number',
		'budget',
		'start_date',
		'finish_date'
	]; 

	public function paymentservice() {
		return $this->hasMany(Payment::class);
	}
}
