<div x-data=
     "{
        userName:           @entangle('userName').defer
        client:             @entangle('client').defer
        approved:           @entangle('approved').defer
        totalPreDiscount:   @entangle('totalPreDiscount').defer
        discount:           @entangle('discount').defer
        total:              @entangle('total').defer
        query:              @entangle('query').defer
     }"
     x-init="
     "
>

    <x-jet-button class="modal-open" wire:click="confirmOrderCreation" wire:loading.attr="disabled">
        {{ __('Add Order') }}
    </x-jet-button>

    <x-modal wire:model="confirmingOrderCreation">
        <x-slot name="title">
            {{ __('Add Order') }}
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-2 divide-x divide-gray-400">
                <div class="pr-6">
                    <x-input>
                        <x-slot name="title">
                            {{ __('Salesman') }}
                        </x-slot>
                        <x-slot name="readonly">
                            {{ __('true') }}
                        </x-slot>
                        <x-slot name="attribute">
                            {{ 'userName' }}
                        </x-slot>
                        <x-slot name="type">
                            {{ __('text') }}
                        </x-slot>
                        <x-slot name="placeholder">
                            {{ __('') }}
                        </x-slot>
                    </x-input>

                    @component('components.select', ['entities' => \App\Models\Client::all()])
                        @slot('title')
                            {{ __('Client') }}
                        @endslot
                        @slot('value')
                            {{ __('clientName') }}
                        @endslot
                    @endcomponent

                    <x-input>
                        <x-slot name="title">
                            {{ __('Total') }}
                        </x-slot>
                        <x-slot name="readonly">
                            {{ __('false') }}
                        </x-slot>
                        <x-slot name="attribute">
                            {{ 'totalPreDiscount' }}
                        </x-slot>
                        <x-slot name="type">
                            {{ __('text') }}
                        </x-slot>
                        <x-slot name="placeholder">
                            {{ __('') }}
                        </x-slot>
                    </x-input>

                    <x-input>
                        <x-slot name="title">
                            {{ __('Discount (%)') }}
                        </x-slot>
                        <x-slot name="readonly">
                            {{ __('false') }}
                        </x-slot>
                        <x-slot name="attribute">
                            {{ 'discount' }}
                        </x-slot>
                        <x-slot name="type">
                            {{ __('text') }}
                        </x-slot>
                        <x-slot name="placeholder">
                            {{ __('') }}
                        </x-slot>
                    </x-input>

                    <x-input>
                        <x-slot name="title">
                            {{ __('Grand Total') }}
                        </x-slot>
                        <x-slot name="readonly">
                            {{ __('true') }}
                        </x-slot>
                        <x-slot name="attribute">
                            {{ 'total' }}
                        </x-slot>
                        <x-slot name="type">
                            {{ __('text') }}
                        </x-slot>
                        <x-slot name="placeholder">
                            {{ __('') }}
                        </x-slot>
                    </x-input>
                </div>
                <div class="pl-6 pt-3">
                    @component('components.select-multiple', ['entities' => \App\Models\Product::all()])
                        @slot('title')
                            {{ __('Products') }}
                        @endslot
                    @endcomponent
                </div>
            </div>
        </x-slot>


        <x-slot name="footer">
            <x-jet-secondary-button class="modal-close">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="modal-close ml-2" wire:click="createOrder" wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-jet-button>
        </x-slot>
    </x-modal>
</div>
