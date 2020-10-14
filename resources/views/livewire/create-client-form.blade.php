<div x-data=
     "{
        name: @entangle('name').defer
        address: @entangle('address').defer
        contact: @entangle('contact').defer
    }">
    <x-jet-button class="modal-open" wire:loading.attr="disabled">
        {{ __('Add Client') }}
    </x-jet-button>

    <x-modal>
        <x-slot name="title">
            {{ __('Add Client') }}
        </x-slot>
        <x-slot name="content">
            <x-input>
                <x-slot name="title">
                    {{ __('Name') }}
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
                    {{ __('Address') }}
                </x-slot>
                <x-slot name="attribute">
                    {{ __('address') }}
                </x-slot>
                <x-slot name="type">
                    {{ __('text') }}
                </x-slot>
                <x-slot name="placeholder">
                    {{ __('Address') }}
                </x-slot>
            </x-input>

            <x-input>
                <x-slot name="title">
                    {{ __('Contact') }}
                </x-slot>
                <x-slot name="attribute">
                    {{ __('contact') }}
                </x-slot>
                <x-slot name="type">
                    {{ __('text') }}
                </x-slot>
                <x-slot name="placeholder">
                    {{ __('Contact') }}
                </x-slot>
            </x-input>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button class="modal-close">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="createClient" wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-jet-button>
        </x-slot>
    </x-modal>

</div>
