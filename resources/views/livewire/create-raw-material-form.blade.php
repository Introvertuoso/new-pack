<div x-data=
     "{
        name:    @entangle('name').defer
        condition: @entangle('condition').defer
        amount: @entangle('amount').defer
    }">
    <x-jet-button class="popup-open" wire:click="confirmRawMaterialCreation" wire:loading.attr="disabled">
        {{ __('Add Raw Material') }}
    </x-jet-button>

    <x-modal>
        <x-slot name="modalClosedEvent">
            {{ __('rawMaterialsModalClosed') }}
        </x-slot>

        <x-slot name="title">
            {{ __('Add Raw Material') }}
        </x-slot>

        <x-slot name="content">
            <x-input>
                <x-slot name="title">
                    {{ __('Name') }}
                </x-slot>
                <x-slot name="readonly">
                    {{ __('false') }}
                </x-slot>
                <x-slot name="attribute">
                    {{ __('name') }}
                </x-slot>
                <x-slot name="type">
                    {{ __('text') }}
                </x-slot>
                <x-slot name="placeholder">
                    {{ __('Name') }}
                </x-slot>
            </x-input>

            <x-input>
                <x-slot name="title">
                    {{ __('Condition') }}
                </x-slot>
                <x-slot name="readonly">
                    {{ __('false') }}
                </x-slot>
                <x-slot name="attribute">
                    {{ __('condition') }}
                </x-slot>
                <x-slot name="type">
                    {{ __('text') }}
                </x-slot>
                <x-slot name="placeholder">
                    {{ __('Condition') }}
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
            <x-jet-button class="popup-close mr-2" wire:click="createRawMaterial" wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-jet-button>

            <x-jet-secondary-button class="popup-close">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

        </x-slot>
    </x-modal>

</div>
