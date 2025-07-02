<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Supplier;
use App\Models\Customers;


class DashboardComponent extends Component
{
    public function render(){
        return view('dashboard',[
            'totalPrdts'=>Product::count(),
            'totalSuppliers'=>Supplier::count(),
            'totalCustomers'=>Customers::count()
        ]);
    }
}
