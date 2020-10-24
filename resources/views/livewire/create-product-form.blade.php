<div x-data=
     "{
        clientName:    @entangle('clientName').defer
        amount: @entangle('amount').defer
    }">
    <x-jet-button class="popup-open" wire:click="confirmProductCreation" wire:loading.attr="disabled">
        {{ __('Add Product') }}
    </x-jet-button>

    <x-modal>
        <x-slot name="title">
            {{ __('Add Product') }}
        </x-slot>
        <x-slot name="content">
            <x-input>
                <x-slot name="title">
                    {{ __('ClientName') }}
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
        </x-slot>
        <x-slot name="footer">
            <x-jet-button class="popup-close mr-2" wire:click="createProduct" wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-jet-button>

            <x-jet-secondary-button class="popup-close">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

        </x-slot>
    </x-modal>

</div>
