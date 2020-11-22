<div
    class="relative h-full"
    x-data="{
        products:                           @entangle('products').defer
        amounts:                            @entangle('amounts').defer
{{--        flexographicSelectMultiple:         @entangle('flexographicSelectMultiple').defer--}}
    {{--        offsetSelectMultiple:               @entangle('offsetSelectMultiple').defer--}}
    {{--        changesSavedHTML:                   @entangle('changesSavedHTML').defer--}}
        tabContent:                         @entangle('tabContent').defer
    }"
    x-init="">

    {{--    <div class="pb-2">--}}
    {{--        {!! $changesSavedHTML !!}--}}
    {{--    </div>--}}

    <div class="flex justify-between items-center">
        <label class="m-0 align-middle text-lg">
            Products:
        </label>
        <div style="display: inline-block">
            @livewire('create-product-form')
        </div>
    </div>

    <div class="mt-2">
        @component('components.tabs', ['entities' => ['flexographic', 'offset']])
            @slot('func')
                {{ __('initializeTab') }}
            @endslot
        @endcomponent
    </div>

    {{--    <button class="m-0 mt-1 p-1 bg-green-600 text-center" wire:click="initializeTab('flexographic')">--}}
    {{--        Flexographic--}}
    {{--    </button>--}}
    {{--    <button class="m-0 mt-1 p-1 bg-green-600 text-center" wire:click="initializeTab('offset')">--}}
    {{--        Offset--}}
    {{--    </button>--}}

    <div class="m-0" style="width: inherit; height: 22rem; overflow-y: scroll">
        <div class="px-1">
            {!! $tabContent !!}
        </div>
        {{--        <div class="px-3">--}}
        {{--            {!! $flexographicSelectMultiple !!}--}}
        {{--        </div>--}}

        {{--        <div class="pt-10 pr-2 pb-2">--}}
        {{--            <hr class="p-0 m-0">--}}
        {{--        </div>--}}

        {{--        <div class="px-3 pb-10">--}}
        {{--            {!! $offsetSelectMultiple !!}--}}
        {{--        </div>--}}
    </div>

    {{--    <div class="absolute bottom-0 my-2 w-full">--}}
    {{--        <hr class="my-1">--}}
    {{--        <button class="mt-1 p-1 bg-green-600 w-full rounded-full text-center" wire:click="done">--}}
    {{--            Done--}}
    {{--        </button>--}}
    {{--    </div>--}}

    {{--    @component('components.select', ['entities' => \App\Models\Client::all()])--}}
    {{--        @slot('title')--}}
    {{--            {{ __('Client') }}--}}
    {{--        @endslot--}}
    {{--        @slot('func')--}}
    {{--            {{ __('pickClient') }}--}}
    {{--        @endslot--}}
    {{--        @slot('value')--}}
    {{--            {{ __('clientName') }}--}}
    {{--        @endslot--}}
    {{--    @endcomponent--}}


    {{--    {!! $flexographicSelectMultiple !!}--}}

    {{--    {!! $offsetSelectMultiple !!}--}}

    {{--    @component('components.select-multiple', [--}}
    {{--            'entities' => \App\Models\Product::where('type', 'flexographic')->get(),--}}
    {{--        ])--}}
    {{--        @slot('title')--}}
    {{--            {{ __('Flexographic') }}--}}
    {{--        @endslot--}}
    {{--        @slot('selectEvent')--}}
    {{--            {{ __('productPicked') }}--}}
    {{--        @endslot--}}
    {{--        @slot('removeEvent')--}}
    {{--            {{ __('productUnpicked') }}--}}
    {{--        @endslot--}}
    {{--        @slot('parentClosedEvent')--}}
    {{--            {{ __('orderModalClosed') }}--}}
    {{--        @endslot--}}
    {{--        @slot('onSourceModified')--}}
    {{--            @include('scripts.product-source-changed-script')--}}
    {{--        @endslot--}}
    {{--    @endcomponent--}}

    {{--    @component('components.select-multiple', [--}}
    {{--            'entities' => \App\Models\Product::where('type', 'offset')->get(),--}}
    {{--        ])--}}
    {{--        @slot('title')--}}
    {{--            {{ __('Offset') }}--}}
    {{--        @endslot--}}
    {{--        @slot('selectEvent')--}}
    {{--            {{ __('productPicked') }}--}}
    {{--        @endslot--}}
    {{--        @slot('removeEvent')--}}
    {{--            {{ __('productUnpicked') }}--}}
    {{--        @endslot--}}
    {{--        @slot('parentClosedEvent')--}}
    {{--            {{ __('orderModalClosed') }}--}}
    {{--        @endslot--}}
    {{--        @slot('onSourceModified')--}}
    {{--            @include('scripts.product-source-changed-script')--}}
    {{--        @endslot--}}
    {{--    @endcomponent--}}
</div>
