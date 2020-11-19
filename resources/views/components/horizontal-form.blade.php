<div class="">
    <div class="">
        <div class="flex flex-col md:flex-row border-b border-gray-200">
            <div class="flex-1 flex flex-col md:flex-row">
                <div class="w-8 h-full font-bold text-gray-800 mt-2 text-center">
                    {{ $index }}
                </div>
                <select wire:model="{{ $optionsModel }}" class="flex-1 m-1 h-8 form-select w-full">
                    <option>...</option>
                    @foreach($entities as $entity)
                        <option value="{{ $entity->id }}">{{ $entity->id }}</option>
                    @endforeach
                </select>
                <div class="w-full flex-1">
                    <div class="flex border h-8 p-1 m-1 border-gray-200 rounded-lg">
                        <input type="text" wire:model="{{ $amountsModel }}"
                               class="p-1 appearance-none outline-none w-full text-gray-800 ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
