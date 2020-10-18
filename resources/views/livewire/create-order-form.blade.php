<div x-data=
     "{
        userName:       @entangle('userName').defer
        client:         @entangle('client').defer
        approved:       @entangle('approved').defer
        total:          @entangle('total').defer
        query:          @entangle('query').defer
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
