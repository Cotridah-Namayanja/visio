<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSupplier extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'supplier_id',
        'product_id'
    ];
    public function supplier()

}
