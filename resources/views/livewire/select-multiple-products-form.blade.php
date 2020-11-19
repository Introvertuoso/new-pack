<div
    x-data="{
        products:                           @entangle('products').defer
        amounts:                            @entangle('amounts').defer
        flexographicSelectMultiple:         @entangle('flexographicSelectMultiple').defer
        offsetSelectMultiple:               @entangle('offsetSelectMultiple').defer
        }"
     x-init="">

    <h1 class="text-lg">
        Products:
    </h1>

    @livewire('create-product-form')

    <div class="p-2">
    </div>

    {!! $flexographicSelectMultiple !!}

    <div class="p-2">
    </div>
    <hr>

    {!! $offsetSelectMultiple !!}

    <div class="p-2">
    </div>
    <hr>

    <button class="flex w-full bg-indigo-600" wire:click="done">
        Done
    </button>

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
