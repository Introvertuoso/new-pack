<div class="">
    <div class="">
        <div class="flex flex-col md:flex-row border-b border-gray-200">
            <div class="w-64 font-bold text-gray-800">
                {{ $index }}
            </div>
            <div class="flex-1 flex flex-col md:flex-row">
                <select class="flex-1 h-10 form-select w-full">
                    @foreach($entities as $entity)
                        <option value="{{ $entity->id }}">{{ $entity->id }}</option>
                    @endforeach
                </select>
                <div class="w-full flex-1">
                    <div class="bg-white flex border border-gray-200 rounded">
                        <input value="{{ $amount }}" class="p-1 appearance-none outline-none w-full text-gray-800 ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
