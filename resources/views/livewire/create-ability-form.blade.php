<div x-data=
     "{
        name:    @entangle('name').defer
    }">
    <x-jet-button class="popup-open" wire:click="confirmAbilityCreation" wire:loading.attr="disabled">
        {{ __('Add Ability') }}
    </x-jet-button>

    <x-modal>
        <x-slot name="title">
            {{ __('Add Ability') }}
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

        </x-slot>

        <x-slot name="footer">
            <x-jet-button class="popup-close mr-2" wire:click="createAbility" wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-jet-button>

            <x-jet-secondary-button class="popup-close">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

        </x-slot>
    </x-modal>
</div>
