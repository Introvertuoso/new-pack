<x-app-layout>
    <x-slot name="header">
        <div class="flex screen-w">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Clients') }}
            </h2>

            <div class="ml-10 rounded-md shadow">
                @livewire('create-client-form')
            </div>
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
                                        Contact
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Address
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50"></th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                @foreach($clients as $client)
                                    <tr>
                                        <td class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            {{ $client->name }}
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            {{ $client->contact }}
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            {{ $client->address }}
                                        </td>
                                        <td class="px-6 py-2 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                            <!-- TODO: make the edit go somewhere -->
                                            @can('write-client', auth()->user())
                                                <a href="/clients/{{$client}}/edit"
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

    <x-datatables></x-datatables>

</x-app-layout>
