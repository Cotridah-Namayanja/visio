<?php

namespace App\Models;
use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'unit',
        'quantity',
        'buying_price',
        'selling_price'

    ];
}
