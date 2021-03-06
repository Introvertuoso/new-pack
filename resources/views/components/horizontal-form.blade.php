<div class="">
    <div class="flex flex-col md:flex-row border-b border-gray-200">
        <div class="flex-1 flex flex-col md:flex-row">
            <div
                style="margin: auto; padding: 10px;"
                class="flex flex-col text-center h-full w-8 font-bold text-gray-800">
                {{ $index }}
            </div>
            <select
                wire:model="{{ $optionsModel }}"
                class="flex-1 p-1 m-1 h-8 form-select w-full">
                <option>...</option>
                @foreach($entities as $entity)
                    <option class="p-1" value="{{ $entity->id }}">{{ $entity->id }}</option>
                @endforeach
            </select>
            <div class="w-full flex-1">
                <div class="flex border h-8 p-1 m-1 border-gray-200 rounded-lg">
                    <input type="text" wire:model="{{ $amountsModel }}"
                           class="p-1 appearance-none outline-none w-full text-gray-800 ">
                </div>
            </div>
            <button
                class='h-8 m-1 ml-1 py-1 px-3 bg-red-700 rounded-lg text-center text-white'
                wire:click="{{ $remove }}"
                wire:loading.attr='disabled'>
                -
            </button>
        </div>
    </div>
</div>
