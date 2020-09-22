<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    protected $fillable = ['description', 'type_id', 'status'];
}
