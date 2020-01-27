<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
//    The table with this model.
    protected $table = 'orders';

//    Attributes that are assignable.
    protected $fillable = ['id'];
}