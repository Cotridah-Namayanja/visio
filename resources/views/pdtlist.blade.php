<x-layouts.app>
     <div class="container mx-auto px-4 my-8">
    <div class=" rounded-lg shadow-xl">
        <div class="bg-blue-600 text-white px-6 py-4 rounded-t-lg flex justify-between items-center">
            <h4 class="text-xl font-semibold m-0">Product List</h4>
            <a class=" text-blue-600 px-4 py-2 rounded-lg hover:bg-gray-100 transition-colors"
               href="{{ route('form') }}">Add Product</a>
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
</div>


    </x-layouts.app>
