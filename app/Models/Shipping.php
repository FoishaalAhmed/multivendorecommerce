<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = [
        'order_id', 'user_id', 'name', 'phone', 'email', 'address', 
    ];
}
