<?php

namespace App\Livewire;

use Flux\Flux;
use App\Models\Product;
use Livewire\Component;

class AdvancedProductsComponent extends Component
{
    public $product_name;
    public $unit;
    public $quantity;
    public $selling_price;
    public $buying_price;



    public function render()
    {
        return view('livewire.advanced-products-component',[
            'products'=> Product::get()
        ]);
    }

    public function savepdts(){
        // dd( $this->product_name);
        $this->validate([
           'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer',
             'selling_price' => 'required|integer',
             'buying_price' => 'required|integer',
        ]);


        Product::create([
            'product_name' => $this->product_name,
            'unit'=>$this->unit,
            'quantity'=>$this->quantity,
            'buying_price'=>$this->buying_price,
            'selling_price'=>$this->selling_price,
        ]);

        $this->reset();

        Flux::modals()->close();

    }
}
