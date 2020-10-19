<style>
    .top-100 {
        top: 100%
    }

    .bottom-100 {
        bottom: 100%
    }

    .max-h-select {
        max-height: 150px;
    }
</style>


<div class="flex-auto flex flex-col m-2 ">
    <h1>
        {{ $title }}
    </h1>

    <div class="flex flex-col items-center relative">
        <div class="w-full  svelte-1l8159u">
            <div class="mt-2 bg-white p-1 flex border border-gray-200 rounded svelte-1l8159u">
                <div class="flex flex-auto flex-wrap">
                </div>

                <input
                    wire:model="{{ $value }}"
                    class="p-1 px-2 appearance-none outline-none w-full text-gray-800  svelte-1l8159u"
                    {{--                    TODO: Make this a search field?--}}
                    readonly
                >

                <div>
{{--                    <button--}}
{{--                        --}}{{--                        TODO: Make this functional--}}
{{--                        class="cursor-pointer w-6 h-full flex items-center text-gray-400 outline-none focus:outline-none">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"--}}
{{--                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
{{--                             stroke-linejoin="round" class="feather feather-x w-4 h-4">--}}
{{--                            <line x1="18" y1="6" x2="6" y2="18"></line>--}}
{{--                            <line x1="6" y1="6" x2="18" y2="18"></line>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
                </div>
                <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">
                    <button class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                        <svg class="open-list drop-button feather feather-chevron-up w-4 h-4" fill="none" height="100%" stroke="currentColor"
                             style="transform: rotate(180deg)"
                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                             width="100%" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="18 15 12 9 6 15"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="list hidden pointer-events-none absolute shadow top-100 z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj">
            <div class="flex flex-col w-full">

                @foreach($entities as $entity)
                    @if($loop->first)
                        <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100" style="">
                            <div
                                class="close-list flex w-full items-center p-2 pl-2 border-transparent bg-white border-l-2 relative hover:bg-teal-600 hover:text-teal-100 hover:border-teal-600"
                                wire:click="pickClient({{ $entity->id }})"
                                wire:loading.attr="disabled">
                                <div class="w-full items-center flex">
                                    <div class="mx-2 leading-6">
                                        {{ $entity->name }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    @elseif($loop->last)
                        <div class="cursor-pointer w-full border-gray-100 rounded-b hover:bg-teal-100 " style="">
                            <div
                                class="close-list flex w-full items-center p-2 pl-2 border-transparent bg-white border-l-2 relative hover:bg-teal-600 hover:text-teal-100 hover:border-teal-600"
                                wire:click="pickClient({{ $entity->id }})"
                                wire:loading.attr="disabled">
                                <div class="w-full items-center flex">
                                    <div class="mx-2 leading-6">
                                        {{ $entity->name }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    @else
                        <div class="cursor-pointer w-full border-gray-100 border-b hover:bg-teal-100 " style="">
                            <div
                                class="close-list flex w-full items-center p-2 pl-2 border-transparent bg-white border-l-2 relative hover:bg-teal-600 hover:text-teal-100"
                                wire:click="pickClient({{ $entity->id }})"
                                wire:loading.attr="disabled">
{{--                                TODO: Make these abstracted?--}}
                                <div class="w-full items-center flex">
                                    <div class="mx-2 leading-6">
                                        {{ $entity->name }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
</div>

<script>
    var angle = 180;
    var closed = true

    function toggleList() {
        const body = document.querySelector('body')
        const list = document.querySelector('.list')
        const button = document.querySelector('.drop-button')
        angle = angle + 180
        if (angle == 360) {
            angle = 0
        }
        button.style.transform = 'rotate(' + angle + 'deg)'
        list.classList.toggle('hidden')
        list.classList.toggle('pointer-events-none')
        body.classList.toggle('list-active')
    }

    var openlist = document.querySelectorAll('.open-list')
    for (var i = 0; i < openlist.length; i++) {
        openlist[i].addEventListener('click', function (event) {
            event.preventDefault()
            toggleList()
        })
    }

    var closelist = document.querySelectorAll('.close-list')
    for (var i = 0; i < closelist.length; i++) {
        closelist[i].addEventListener('click', toggleModal)
    }
</script>
