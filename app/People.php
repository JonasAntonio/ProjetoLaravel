<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'name', 
        'birth_year', 
        'eye_color', 
        'gender', 
        'hair_color',
        'height',
        'mass',
        'skin_color',
        'homeworld',
        'url',
        'created',
        'edited'
    ];
}
