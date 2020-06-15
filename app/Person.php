<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ["name"];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
