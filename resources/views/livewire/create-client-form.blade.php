<div x-data=
     "{
        name:    @entangle('name').defer
        address: @entangle('address').defer
        contact: @entangle('contact').defer
    }">

    <x-jet-button onclick="toggleModal('Add Client')" wire:click="confirmClientCreation" wire:loading.attr="disabled">
        {{ __('Add Client') }}
    </x-jet-button>

    <x-modal>
        <x-slot name="modalClosedEvent">
            {{ __('clientModalClosed') }}
        </x-slot>

        <x-slot name="title">
            {{ __('Add Client') }}
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
                    {{ __('Address') }}
                </x-slot>
                <x-slot name="readonly">
                    {{ __('false') }}
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
                <x-slot name="readonly">
                    {{ __('false') }}
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
            <x-jet-button onclick="toggleModal('Add Client')" class="mr-2" wire:click="createClient" wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-jet-button>

            <x-jet-secondary-button onclick="toggleModal('Add Client')">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

        </x-slot>
    </x-modal>

</div>
