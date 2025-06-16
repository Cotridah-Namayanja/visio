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
    public function supplier(){
        // def
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
 