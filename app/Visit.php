<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = ['visitor', 'device'];

    public function news(){
        return $this->belongsToMany(News::class)->withTimestamps();
    }
}
