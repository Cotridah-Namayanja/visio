<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable =[
        'customer_id',
        'total',
        'discount',
        'tax'

    ];
}
