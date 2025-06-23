<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="p-2">
        <form wire:submit.prevent ="customers">
            <flux:modal.trigger name="edit-profile">
                <flux:button>Add Customer</flux:button>
            </flux:modal.trigger>

            <flux:modal name="edit-profile" class=" w-full">
                <div class="">

                    <flux:input wire:model="customer_name" label="Customer Name" />
                    <flux:input wire:model="contact" label="Contact" />
                    <flux:input wire:model="Address" label="Address" />

                    <div class="flex  mt-3">
                        <flux:spacer />

                        <flux:button type="submit" variant="primary">Save changes</flux:button>
                    </div>
                </div>
            </flux:modal>

    </div>
    </form>

     {{-- Customer Accordion List --}}
     <div class=" flex justify-center">
     <div class="space-y-2 mt-4 w-3/4">
        @forelse ($customers as $index => $customer)
            @if ($loop->iteration==1)
            <div x-data="{ open: true }" class="border rounded-sm shadow-sm p-2 w-full">

            @else
            <div x-data="{ open: false }" class="border rounded-sm shadow-sm p-2 w-full">

            @endif
            {{-- @dd($customers); --}}
                <div class="flex justify-between items-center cursor-pointer" @click="open = !open">
                    <div class="font-semibold">{{ $loop->iteration }} {{ $customer->customer_name }}</div>
                    <button type="button" class=" black hover"><flux:icon name="chevron-down" /></button>
                </div>
                <div x-show="open" x-transition class="mt-2 text-sm text-gray-700">
                    <div><strong>Contact:</strong> {{ $customer->contact }}</div>
                    <div><strong>Address:</strong> {{ $customer->address }}</div>
                </div>
            </div>
        @empty
            <div class="text-gray-500">No customers found.</div>
        @endforelse
    </div>
</div>

</div
