<div class="max-w-4xl mx-auto p-6 bg-white dark:bg-zinc-800 shadow-lg rounded-xl border border-gray-200 dark:border-zinc-700">
    <h2 class="text-center font-bold text-blue-600 text-3xl mb-6">🛒 New Sale</h2>

    <!-- Customer Selection -->
    <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-200 mb-1 font-semibold">Select Customer</label>
        <select wire:model="customer_id" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-zinc-700 dark:text-white">
            <option value="">-- Choose Customer --</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Product Items -->
    @foreach($items as $index => $item)
        <div class="grid grid-cols-4 gap-3 mb-4 p-3 bg-blue-50 dark:bg-zinc-700 rounded-md border border-blue-200 dark:border-zinc-600">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product</label>
                <select wire:model="items.{{ $index }}.product_id" class="w-full px-3 py-1.5 rounded-md border border-gray-300 focus:ring-blue-400 dark:bg-zinc-800 dark:text-white">
                    <option value="">-- Select --</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Qty</label>
                <input type="number" wire:model="items.{{ $index }}.quantity" min="1" class="w-full px-3 py-1.5 rounded-md border border-gray-300 focus:ring-blue-400 dark:bg-zinc-800 dark:text-white" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Price</label>
                <input type="number" step="0.01" wire:model="items.{{ $index }}.price" class="w-full px-3 py-1.5 rounded-md border border-gray-300 focus:ring-blue-400 dark:bg-zinc-800 dark:text-white" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Total</label>
                <input type="text" readonly wire:model="items.{{ $index }}.total" class="w-full px-3 py-1.5 rounded-md bg-gray-100 border border-gray-300 dark:bg-zinc-800 dark:text-white" />
            </div>
        </div>
    @endforeach

    <div class="mb-4">
        <button wire:click.prevent="$set('items', [...$items, ['product_id' => '', 'quantity' => 1, 'price' => 0, 'total' => 0]])"
                class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700 transition">
            + Add Item
        </button>
    </div>

    <!-- Discount and Tax -->
    <div class="grid grid-cols-2 gap-4 mb-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Discount</label>
            <input type="number" wire:model="discount" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:ring-blue-400 dark:bg-zinc-800 dark:text-white" />
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tax</label>
            <input type="number" wire:model="tax" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:ring-blue-400 dark:bg-zinc-800 dark:text-white" />
        </div>
    </div>

    <!-- Totals -->
    <div class="bg-blue-100 dark:bg-zinc-700 rounded-md p-4 text-lg font-semibold text-gray-800 dark:text-gray-100 border border-blue-300 dark:border-zinc-600">
        Subtotal: <span class="text-green-700">{{ number_format(collect($items)->sum('total'), 2) }}</span> UGX<br>
        Grand Total: <span class="text-red-600">{{ number_format(collect($items)->sum('total') - $discount + $tax, 2) }}</span> UGX
    </div>

    <!-- Submit -->
    <div class="mt-6 text-right">
        <button wire:click="submitSale"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow-lg transition">
            💾 Submit Sale
        </button>
    </div>
</div>
