<div class="m-2">
    <h1 class="text-base">
        {{ $title }}
    </h1>

    <div>
        <div class="flex flex-col">
            <div class="flex flex-col">
                @foreach($entities as $entity)
                    <label wire:click="{{ $function }}('{{ $entity }}')"
                           class="radio-butt inline-flex items-center mt-1">
                        <input type="radio" id="{{ $entity }}" name="option" value="text"
                               class="form-radio h-5 w-5 text-gray-600">
                        <span class="ml-1 text-gray-700">
                                {{ $entity }}
                            </span>
                    </label>
                @endforeach
            </div>
        </div>
    </div>
</div>
