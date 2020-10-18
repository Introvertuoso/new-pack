<div class="wrapper px-2 w-full py-3">
    <div class="flex flex-col space-y-3">
        <h1>
            {{ $title }}
        </h1>

{{--        TODO: Use merge attributes->merge() ???--}}
        <div class="flex items-center bg-white border border-gray-400 rounded px-2">
            <input
                wire:model="{{ $attribute }}"
                @if($readonly == 'true')
                    readonly
                @endif
                type="{{ $type }}"
                placeholder="{{ $placeholder }}"
                class="w-full py-2 px-1 placeholder-gray-400 outline-none placeholder-opacity-50"
                autocomplete="off"
            />
        </div>
    </div>
</div>
