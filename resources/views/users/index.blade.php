<x-app-layout>
    <x-slot name="header">
        <div class="flex screen-w">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Users') }}
            </h2>

            <div class="ml-10 rounded-md shadow">
                <button class="items-center justify-center px-2 py-1 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:text-sm md:px-3">
                    Add
                </button>
            </div>

{{--            TODO: Deal with this later (dont forget about modal-open in tag class)--}}

{{--            <!--Modal-->--}}
{{--            <div--}}
{{--                class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">--}}
{{--                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>--}}

{{--                <div--}}
{{--                    class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">--}}

{{--                    <div--}}
{{--                        class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">--}}
{{--                        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"--}}
{{--                             viewBox="0 0 18 18">--}}
{{--                            <path--}}
{{--                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>--}}
{{--                        </svg>--}}
{{--                        <span class="text-sm">(Esc)</span>--}}
{{--                    </div>--}}

{{--                    <!-- Add margin if you want to see some of the overlay behind the modal-->--}}
{{--                    <div class="modal-content py-4 text-left px-6">--}}
{{--                        <!--Title-->--}}
{{--                        <div class="flex justify-between items-center pb-3">--}}
{{--                            <p class="text-2xl font-bold">Simple Modal!</p>--}}
{{--                            <div class="modal-close cursor-pointer z-50">--}}
{{--                                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"--}}
{{--                                     height="18" viewBox="0 0 18 18">--}}
{{--                                    <path--}}
{{--                                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!--Body-->--}}
{{--                        <p>Modal content can go here</p>--}}
{{--                        <p>...</p>--}}
{{--                        <p>...</p>--}}
{{--                        <p>...</p>--}}
{{--                        <p>...</p>--}}

{{--                        <!--Footer-->--}}
{{--                        <div class="flex justify-end pt-2">--}}
{{--                            <button--}}
{{--                                class="modal-add px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">--}}
{{--                                Action--}}
{{--                            </button>--}}
{{--                            <button--}}
{{--                                class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">--}}
{{--                                Close--}}
{{--                            </button>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <script>--}}
{{--                var openmodal = document.querySelectorAll('.modal-open')--}}
{{--                for (var i = 0; i < openmodal.length; i++) {--}}
{{--                    openmodal[i].addEventListener('click', function (event) {--}}
{{--                        event.preventDefault()--}}
{{--                        toggleModal()--}}
{{--                    })--}}
{{--                }--}}

{{--                const overlay = document.querySelector('.modal-overlay')--}}
{{--                overlay.addEventListener('click', toggleModal)--}}

{{--                var closemodal = document.querySelectorAll('.modal-close')--}}
{{--                for (var i = 0; i < closemodal.length; i++) {--}}
{{--                    closemodal[i].addEventListener('click', toggleModal)--}}
{{--                }--}}

{{--                document.onkeydown = function (evt) {--}}
{{--                    evt = evt || window.event--}}
{{--                    var isEscape = false--}}
{{--                    if ("key" in evt) {--}}
{{--                        isEscape = (evt.key === "Escape" || evt.key === "Esc")--}}
{{--                    } else {--}}
{{--                        isEscape = (evt.keyCode === 27)--}}
{{--                    }--}}
{{--                    if (isEscape && document.body.classList.contains('modal-active')) {--}}
{{--                        toggleModal()--}}
{{--                    }--}}
{{--                };--}}


{{--                function toggleModal() {--}}
{{--                    const body = document.querySelector('body')--}}
{{--                    const modal = document.querySelector('.modal')--}}
{{--                    modal.classList.toggle('opacity-0')--}}
{{--                    modal.classList.toggle('pointer-events-none')--}}
{{--                    body.classList.toggle('modal-active')--}}
{{--                }--}}


{{--            </script>--}}
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    {{--                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">--}}
                                    {{--                                        Status--}}
                                    {{--                                    </th>--}}
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50"></th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                @foreach($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <div class="flex items-center">
                                                <!-- TODO: Do something with profile pictures -->
                                                {{--                                                <div class="flex-shrink-0 h-10 w-10">--}}
                                                {{--                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">--}}
                                                {{--                                                </div>--}}
                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">
                                                        {{ $user->name }}
                                                    </div>
                                                    <div class="text-sm leading-5 text-gray-500">
                                                        {{ $user->email }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ $user->title }}
                                            </div>
                                            {{--                                            <div class="text-sm leading-5 text-gray-500">--}}
                                            {{--                                                Optimization--}}
                                            {{--                                            </div>--}}
                                        </td>
                                        {{--                                        <td class="px-6 py-4 whitespace-no-wrap">--}}
                                        {{--                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">--}}
                                        {{--                  Active--}}
                                        {{--                </span>--}}
                                        {{--                                        </td>--}}
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            {{ $user->role()->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                            <!-- TODO: make the edit go somewhere -->
                                            @can('write-user', $user)
                                                <a href="/users/{{$user}}/edit"
                                                   class="text-indigo-600 hover:text-indigo-900">
                                                    Edit
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
