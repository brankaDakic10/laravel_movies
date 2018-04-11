<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable=[ 
        //  kao u tabeli
'title','genre','published_year','storyline'
];
}
