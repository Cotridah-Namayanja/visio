<div>
    <div class="flex justify-between" >
        <div>bsdbd</div>
        <div>bdhhd</div>

    </div>
    <div>
        
        <input wire:model.live=search type="text" placeholder="search for supplier">

        <flux:modal.trigger name="edit-profile">
            <flux:button class="mb-3">Add New Supplier</flux:button>
        </flux:modal.trigger>

        <flux:modal name="edit-profile" class="w-full">
            <form wire:submit.prevent ="suppliers">

                <flux:input wire:model="supplier_name" label=" Supplier Name" placeholder="" />
                <flux:input type="tel" wire:model="supplier_contact" label=" Supplier Contact" placeholder="" />

                <flux:input wire:model="Address" label=" Address" placeholder="Your name" />
                <flux:input wire:model="Email_address" label="  Email address" placeholder="Your name" />


                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary" class="mt-3">Save changes</flux:button>
                </div>
    </div>
    </form>
    </flux:modal>


    <div class="grid grid-cols-4 gap-4">
      @foreach ($suppliers as $supplier )
          <div class="bg-gray-200 border-gray-100 border-1 shadow-lg p-4" >
            <div>{{ $supplier->supplier_name }}</div>
            <div>{{ $supplier->supplier_contact }}</div>
            <div>{{ $supplier->Email_address }}</div>
            <div>{{ $supplier->Address }}</div>

        </div>
      @endforeach  
    </div>

</div>
