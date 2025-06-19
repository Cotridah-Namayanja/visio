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

    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div>
        @forelse ($customers as $customer )

        <div>
            <div class="flex">
                <div>
                    {{ $customer->customer_name  }}
                </div>
                <div>
                    <button>
                        detail
                    </button>
                </div>
            </div>
            <div>
                {{ $customer->contact }}
                {{ $customer->Address}}


            </div>
        </div>

        @empty

        @endforelse
    </div>

</div
