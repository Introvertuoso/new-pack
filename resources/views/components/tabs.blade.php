<div
    x-data="{
      openTab: 1,
      activeClasses: 'border-l border-t border-r rounded-t text-gray-700 hover:text-gray-800',
      inactiveClasses: 'text-gray-500 hover:text-gray-800'
    }"
    style='width: 378px'
>
    <ul class="flex border-b" style="margin-bottom: 0">
        @foreach ($entities as $entity)
            <li @click="openTab = '{{ $entity }}'"
                wire:click="{{ $func }}('{{ $entity }}')"
                :class="{ '-mb-px': openTab === '{{ $entity }}' }"
                class="mr-1">

                <a :class="openTab === '{{ $entity }}' ? activeClasses : inactiveClasses"
                   class="bg-white inline-block py-2 px-4 font-semibold">
                    {{ ucwords($entity) }}
                </a>

            </li>
        @endforeach
    </ul>
    {{--        <div class="w-full pt-4">--}}
    {{--            <div x-show="openTab === {{ $tabs[$i] }}">{{ $contents[$i] }}</div>--}}
    {{--        </div>--}}
</div>
