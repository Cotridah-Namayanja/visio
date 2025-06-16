<?php

namespace App\Models;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'supplier_name',
        'supplier_contact',
        'Address',
        'Email_address'

    ];
    public function productSupplier(){
        return $this->hasMany(ProductSupplier::class, 'id', 'supplier_id');
    }
}
