<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColorProduct extends Model
{
    protected $fillable = [
        'color_id', 'product_id',
    ];
}
