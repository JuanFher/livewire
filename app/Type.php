<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['description'];

    //protected $rules = ['description' => 'required|min:4'];
}
