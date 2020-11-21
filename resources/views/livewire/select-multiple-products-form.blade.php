<div
    class="relative"
    x-data="{
        products:                           @entangle('products').defer
        amounts:                            @entangle('amounts').defer
        flexographicSelectMultiple:         @entangle('flexographicSelectMultiple').defer
        offsetSelectMultiple:               @entangle('offsetSelectMultiple').defer
        changesSavedHTML:                   @entangle('changesSavedHTML').defer
        }"
    x-init="">

    <h1 class="text-lg">
        Products:
    </h1>

    {!! $changesSavedHTML !!}

    <div class="p-2">
    </div>

    @livewire('create-product-form')

    <div class="p-2">
    </div>

    {!! $flexographicSelectMultiple !!}

    <div class="pt-10 pb-2">
        <hr class="p-0 m-0">
    </div>

    {!! $offsetSelectMultiple !!}

    <div class="p-2">
    </div>

    <div class="absolute bottom-0 my-3 w-full">
        <hr>
        <button class="p-1 bg-green-600 w-full rounded-full text-center" wire:click="done">
            Done
        </button>
    </div>

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
