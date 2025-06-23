<?php

namespace App\Livewire;

use Flux\Flux;
use Livewire\Component;
use App\Models\Customers;
use App\Livewire\CustomersComponent;

class CustomersComponent extends Component
{
    public $customer_name='Cots';
    public $contact;
    public $Address;

    public function render()
    {
        return view('livewire.customers-component', [
            'customers'=>Customers::all(),
        ]);
    }

    public function customers(){

        Customers::create([
            'customer_name' => $this->customer_name,
            'contact'=>$this->contact,
            'Address'=>$this->Address,

        ]);

        $this->reset();

        Flux::modals()->close();
    }
}
