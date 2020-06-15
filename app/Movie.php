<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ["name"];
    
    public $timestamps = false;

    public function people()
    {
        return $this->belongsToMany(Person::class);
    }
}
