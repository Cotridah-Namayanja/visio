<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="grid grid-cols-3">
        <div class="col-span-2">
            <flux:input class="border-transparent focus:border-0 w-2" wire:model.live=search type="text" placeholder="search for product" />
        </div>
        <div>
            <flux:modal.trigger name="add-product">
                <flux:button>Add Product</flux:button>
            </flux:modal.trigger>

            <flux:modal name="add-product"  variant="flyout">
                <form wire:submit.prevent="savepdts" class="space-y-6">
                    <div>
                        <flux:heading size="lg">New Product </flux:heading>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <flux:input wire:model="product_name" label="Name" placeholder="product name" />
                        <flux:input wire:model="unit" label="Unit" placeholder="unit of measure" />
                        <flux:input wire:model="quantity" label="Quantity" placeholder="opening stock" />
                        <flux:input wire:model="buying_price" label="Buying Price" placeholder="buying price" />
                        <flux:input wire:model="selling_price" label="Selling Price" placeholder="selling price" />

                    </div>
                    <div class="flex">
                        <flux:spacer />

                        <flux:button type="submit" variant="primary">Save changes</flux:button>
                    </div>
                </form>
            </flux:modal>
        </div>
    </div>


    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 divide-y divide-gray-200">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">#</th>
                        <th class="px-6 py-3 text-left">Pdt Name</th>
                        <th class="px-6 py-3 text-left">Unit</th>
                        <th class="px-6 py-3 text-left">Quantity</th>
                        <th class="px-6 py-3 text-left">Buying Price</th>
                        <th class="px-6 py-3 text-left">Selling Price</th>
                    </tr>
                </thead>
                <tbody class=" divide-y divide-gray-200">
                    @foreach ($products as $index => $product)
                        <tr class="hover:bg-gray-500">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->product_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->unit }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->quantity }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->buying_price }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->selling_price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
