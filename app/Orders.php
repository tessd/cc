<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'Name',
        'Email',
        'Street',
        'City',
        'Zip_code',
        'comment',
        'Order',
        'User_id',
        'Status'
    ];
}
