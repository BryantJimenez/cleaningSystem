<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	protected $fillable = [
		'title', 
		'subtitle',
		'about',
		'services',
		'households',
		'contact',
		'legal',
		'email',
		'address',
		'phone_1',
		'phone_2',
		'phone_3'
	]; 
}
