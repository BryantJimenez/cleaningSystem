<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsVisit extends Model
{
    protected $table = 'news_visit';

    protected $fillable = ['news_id', 'visit_id'];
}
