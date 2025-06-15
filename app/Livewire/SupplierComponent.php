<?php

namespace App\Livewire;

use Flux\Flux;
use Livewire\Component;
use App\Models\Supplier;

class SupplierComponent extends Component
{

    public $supplier_name;
    public $supplier_contact;
    public $Address;
    public $Email_address;
    public $search ='';
    

    public function render()
    {
        return view('livewire.supplier-component', [
            'suppliers'=>Supplier::where('supplier_name', 'like', '%'.$this->search.'%')->get() 
        ]);
    }

    public function suppliers(){
        
        Supplier::create([
            'supplier_name' => $this->supplier_name,
            'supplier_contact'=>$this->supplier_contact,
            'Address'=>$this->Address,
            'Email_address'=>$this->Email_address,
        ]);

        $this->reset();

        Flux::modals()->close();
    }
}
