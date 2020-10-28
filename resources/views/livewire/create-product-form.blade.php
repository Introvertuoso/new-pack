<div x-data=
     "{
        clientName:             @entangle('clientName').defer
        flexographicDetails:    @entangle('flexographicDetails').defer
        offsetDetails:          @entangle('offsetDetails').defer
        amount:                 @entangle('amount').defer
    }">
    <x-jet-button onclick="toggleModal('Add Product')" wire:click="confirmProductCreation" wire:loading.attr="disabled">
        {{ __('Add Product') }}
    </x-jet-button>

    <x-modal>
        <x-slot name="title">
            {{ __('Add Product') }}
        </x-slot>
        <x-slot name="content">
            <div>
                <div class="grid grid-cols-2 grid-rows-1 divide-x divide-gray-400">
                    <div class="pr-6">
                        <x-input>
                            <x-slot name="title">
                                {{ __('Client Name') }}
                            </x-slot>
                            <x-slot name="readonly">
                                {{ __('false') }}
                            </x-slot>
                            <x-slot name="attribute">
                                {{ __('clientName') }}
                            </x-slot>
                            <x-slot name="type">
                                {{ __('text') }}
                            </x-slot>
                            <x-slot name="placeholder">
                                {{ __('ClientName') }}
                            </x-slot>
                        </x-input>

                        <x-input>
                            <x-slot name="title">
                                {{ __('Amount') }}
                            </x-slot>
                            <x-slot name="readonly">
                                {{ __('false') }}
                            </x-slot>
                            <x-slot name="attribute">
                                {{ __('amount') }}
                            </x-slot>
                            <x-slot name="type">
                                {{ __('text') }}
                            </x-slot>
                            <x-slot name="placeholder">
                                {{ __('Amount') }}
                            </x-slot>
                        </x-input>

                        @component("components.radio-group", ['entities' => ['Flexographic', 'Offset']])
                            @slot('title')
                                {{ __('Print Type') }}
                            @endslot

                            @slot('function')
                                {{ __('renderDetailsSection') }}
                            @endslot
                        @endcomponent
                    </div>

                    <div>
                        {!! $offsetDetails !!}
                        {!! $flexographicDetails !!}
                    </div>
                </div>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-button onclick="toggleModal('Add Product')" class="mr-2" wire:click="createProduct"
                          wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-jet-button>

            <x-jet-secondary-button onclick="toggleModal('Add Product')">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

        </x-slot>
    </x-modal>

</div>
