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

    <x-jet-button onclick="toggleModal('Add Order')" wire:click="confirmOrderCreation" wire:loading.attr="disabled">
        {{ __('Add Order') }}
    </x-jet-button>

    <x-modal wire:model="confirmingOrderCreation">
        <x-slot name="title">
            {{ __('Add Order') }}
        </x-slot>

        <x-slot name="content">
            <div>
                <div class="grid grid-cols-2 grid-rows-1 divide-x divide-gray-400">
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

                        @livewire('create-client-form')
                        @component('components.select', ['entities' => \App\Models\Client::all()])
                            @slot('title')
                                {{ __('Client') }}
                            @endslot
                            @slot('func')
                                {{ __('pickClient') }}
                            @endslot
                            @slot('value')
                                {{ __('clientName') }}
                            @endslot
                        @endcomponent

                        {{--                        <div class="ml-10 rounded-md shadow">--}}
                        {{--                            @livewire('create-client-form')--}}
                        {{--                        </div>--}}

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
                    <div class="pl-6">
                        <h1 class="text-lg">
                            Products:
                        </h1>
                        @livewire('create-product-form')

                        @component('components.select-multiple',
                                [
                                    'entities' => \App\Models\Product::where('type', 'flexographic')->get(),
                                ])
                            @slot('title')
                                {{ __('Flexographic') }}
                            @endslot
                            @slot('selectEvent')
                                {{ __('productPicked') }}
                            @endslot
                            @slot('removeEvent')
                                {{ __('productUnpicked') }}
                            @endslot
                            @slot('onSourceModified')
                                @include('scripts.product-source-changed-script')
                            @endslot
                        @endcomponent

                        <div class="p-3">
                        </div>

                        @component('components.select-multiple',[
                            'entities' => \App\Models\Product::where('type', 'offset')->get(),
                            ])
                            @slot('title')
                                {{ __('Offset') }}
                            @endslot
                            @slot('selectEvent')
                                {{ __('productPicked') }}
                            @endslot
                            @slot('removeEvent')
                                {{ __('productUnpicked') }}
                            @endslot
                            @slot('onSourceModified')
                                @include('scripts.product-source-changed-script')
                            @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-button onclick="toggleModal('Add Order')" class="mr-2" wire:click="createOrder"
                          wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-jet-button>

            <x-jet-secondary-button onclick="toggleModal('Add Order')">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-modal>
</div>
