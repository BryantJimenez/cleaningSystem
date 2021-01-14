<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
	use softDeletes;
    protected $fillable = [
		'name', 
		'code'
	]; 
}
