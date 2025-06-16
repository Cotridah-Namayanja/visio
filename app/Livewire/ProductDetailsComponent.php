<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Supplier;

class ProductDetailsComponent extends Component
{

    public $product;


    public function mount($id){
        // dd($id);
        $this->product=Product::findOrFail($id);
        // dd($this->product);
    }
    public function render()
    {
        return view('livewire.product-details-component', [
            'suppliers'=>Supplier::all(),
        ]);
    }

    public function savesupplier(){
        dd('saved');
    }
}
