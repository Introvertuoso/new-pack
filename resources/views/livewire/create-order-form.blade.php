<x-add-button wire:click="confirmOrderCreation" wire:loading.attr="disabled">
    {{ __('Add Order') }}
</x-add-button>

<x-jet-dialog-modal wire:model="confirmingOrderCreation">
    <x-slot name="title">
        {{ __('Add Order') }}
    </x-slot>

    <x-slot name="content">
        <div>
            <h1>
                Hello
            </h1>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingOrderCreation')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-jet-secondary-button>

        <x-add-button class="ml-2" wire:click="createOrder" wire:loading.attr="disabled">
            {{ __('Add Order') }}
        </x-add-button>
    </x-slot>
</x-jet-dialog-modal>

