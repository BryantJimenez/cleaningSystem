<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     protected $fillable = [
		'user_id',
		'contract_id',
		'service_id',
		'household_id',
		'bank_id',
		'type_pay',
		'total',
		'reference',
		'date',
		'issue_bank'
	]; 

	public function householdpay() {
		return $this->hasMany(HouseholdPay::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function bank() {
		return $this->belongsTo(Bank::class);
	}

	public function issue() {
		return $this->belongsTo(Bank::class, 'issue_bank');
	}
}
