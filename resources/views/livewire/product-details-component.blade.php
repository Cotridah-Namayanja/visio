<div class="bg-gray-200 border-gray-100 border-1 shadow-lg p-4 grid grid-cols-12" >
    {{-- Success is as dangerous as failure. --}}
    <div class="col-span-9">
    <div>{{ $product->product_name }}</div>
    <div>{{ $product->unit }}</div>
    <div>{{ $product->quantity }}</div>
    <div>{{ $product->buying_price }}</div>
    <div>{{ $product->selling_price}}</div>
</div>

    {{-- @dd($product->productSupplier) --}}
    {{-- @foreach($product->productSupplier)


    @endforeach --}}
    <div class="col-span-3">
        <flux:modal.trigger name="add-product">
            <flux:button>Add Supplier</flux:button>
        </flux:modal.trigger>

        <flux:modal name="add-product"  variant="flyout">
            <form wire:submit.prevent="savesupplier" class="space-y-6">
                <div>
                    <flux:heading size="lg"></flux:heading>
                </div>
                <div class="grid grid-cols-1 gap-4">
                    {{-- <flux:input wire:model="product_name" label="Name" placeholder="product name" /> --}}

                    <select>
                        {{-- <option>cots</option>
                        <option>killer</option> --}}
                        @foreach ($suppliers as $supplier )
                        <option>{{ $supplier->supplier_name }}</option>

                        @endforeach

                    </select>
                    {{-- @dd($suppliers) --}}

                </div>
                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary">Save changes</flux:button>
                </div>
            </form>
        </flux:modal>
    </div>

</div>
