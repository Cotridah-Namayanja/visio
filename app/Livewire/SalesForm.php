<?php

namespace App\Livewire;

use App\Models\Sale;
use App\Models\Product;
use Livewire\Component;
use App\Models\SaleItem;
use App\Models\Customers;

class SalesForm extends Component
{
    public $customers = [];
    public $products = [];
    public $items = [];
    public $discount = 0;
    public $tax = 0;
    public $customer_id;

    public function mount()
    {
        $this->customers = Customers::all();
        $this->products = Product::all();

        $this->items = [
            ['product_id' => '', 'quantity' => 1, 'price' => 0, 'total' => 0]
        ];
    }

    public function updatedItems($value, $key)
    {
        // [$index, $field] = explode('.', $key);

        // if ($field === 'product_id' && $this->items[$index]['product_id']) {
        //     $product = Product::find($this->items[$index]['product_id']);
        //     if ($product) {
        //         $this->items[$index]['price'] = $product->selling_price;
        //         $this->items[$index]['total'] = $product->selling_price * $this->items[$index]['quantity'];
        //     }
        // }

    [$index, $field] = explode('.', $key);

    if (in_array($field, ['price', 'quantity'])) {
        $price = $this->items[$index]['price'] ?? 0;
        $qty = $this->items[$index]['quantity'] ?? 1;

        $this->items[$index]['total'] = $price * $qty;
    }
}


    public function submitSale()
    {
        $subtotal = collect($this->items)->sum('total');
        $grandTotal = $subtotal - $this->discount + $this->tax;

        $sale = Sale::create([
            'customer_id' => $this->customer_id,
            'total' => $subtotal,
            'discount' => $this->discount,
            'tax' => $this->tax,
            'grand_total' => $grandTotal
        ]);

        foreach ($this->items as $item) {
            SaleItem::create([
                'sale_id' => $sale->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total' => $item['total'],
            ]);
        }

        session()->flash('message', 'Sale recorded successfully!');
        $this->reset();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.sales-form');
    }
}
