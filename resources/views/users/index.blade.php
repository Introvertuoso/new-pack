<x-app-layout>
    <x-slot name="header">
        <div class="flex screen-w">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Users') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div
                        class="w-full md:w-4/5 xl:w-3/5  mx-auto px-2 py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div
                            class="p-8 mt-6 lg:mt-0 rounded bg-white overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table id="example" class="table table-hover table-bordered" style="width: 100%">
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
                                        <td class="px-6 py-2 whitespace-no-wrap">
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
                                        <td class="px-6 py-2 whitespace-no-wrap">
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
                                        <td class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            {{ $user->role()->name }}
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-right text-sm leading-5 font-medium">
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

    <x-datatables>

    </x-datatables>

</x-app-layout>
