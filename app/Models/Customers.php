<?php

namespace App\Models;

use App\Models\Customers;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
    'customer_name',
    'contact',
    'Address'
    ];
}
