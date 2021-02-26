<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    protected $fillable = [
		'title',
		'slug',
		'user_id',
		'category_id', 
		'sale',
		'rent',
		'sale_price',
		'rent_price',
		'rent_price_january',
		'rent_price_july',
		'rent_price_august',
		'rent_price_days',
		'rent_price_years',
		'reference_keys',
		'number_keys',
		'address',
		'description',
		'city_id',
		'contract_id',
		'square_meter_h',
		'square_meter_p',
		'gararge_number',
		'alarm_company_id',
		'electric_company_id',
		'water_company_id',
		'phone_company_id',
		'administrator_name',
		'administrator_phone',
		'pool_id',
		'seat_number',
		'contract_agent'
	]; 

	public function business() {
		return $this->belongsTo(Business::class);
	}

	public function category() {
		return $this->belongsTo(Category::class);
	}

	public function city() {
		return $this->belongsTo(City::class);
	}

	public function company() {
		return $this->belongsTo(Company::class);
	}

	public function contact() {
		return $this->belongsTo(Contact::class);
	}

	public function pool() {
		return $this->belongsTo(Pool::class);
	}

	public function service() {
		return $this->belongsTo(Service::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function householdpay() {
		return $this->hasMany(HouseholdPay::class);
	}

	public function householdphoto() {
		return $this->hasMany(HouseholdPhoto::class);
	}
}
