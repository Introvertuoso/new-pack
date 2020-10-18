<div x-data=
     "{
        name:    @entangle('name').defer
    }">
    <x-jet-button class="modal-open" wire:click="confirmRoleCreation" wire:loading.attr="disabled">
        {{ __('Add Role') }}
    </x-jet-button>

    <x-modal>
        <x-slot name="title">
            {{ __('Add Role') }}
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
            <x-jet-secondary-button class="modal-close">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="modal-close ml-2" wire:click="createRole" wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-jet-button>
        </x-slot>
    </x-modal>

</div>
