<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class SelectMultipleProductsForm extends Component
{
    public $products = [];

    public $flexographics = [];
    public $offsets = [];

    public $flexographicsAmounts = [];
    public $offsetsAmounts = [];

    public $nRowsFlexographic = 1;
    public $nRowsOffset = 1;

    public $flexographicSelectMultiple = '';
    public $offsetSelectMultiple = '';

    public $listeners = [
        'orderModalClosed' => 'init'
    ];

    public function init()
    {
        $this->products = [];

        $this->flexographics = [];
        $this->offsets = [];

        $this->flexographicsAmounts = [0];
        $this->offsetsAmounts = [0];

        $this->nRowsFlexographic = 1;
        $this->nRowsOffset = 1;

        $this->initializeFlexographicTable();
        $this->initializeOffsetTable();
    }

//    TODO: Add a name attribute to everything?

    public function pickProduct($id, $amount)
    {
        $this->products[$id] = $amount;
    }

    public function unpickProduct($id)
    {
        unset($this->products[$id]);
    }

    public function initializeFlexographicTable()
    {
        $this->flexographicSelectMultiple = '';

        $this->flexographicSelectMultiple .= "<h1 class='text-base'> Flexographic </h1>";

        for ($i = 0; $i < $this->nRowsFlexographic; $i++) {
//            $this->flexographics[$i] = '';
//            $this->flexographicsAmounts[$i] = 0;
            $this->flexographicSelectMultiple .= view('components.horizontal-form', [
                'entities' => Product::where('type', 'flexographic')->get(),
                'index' => $i,
                'optionsModel' => 'flexographics.' . $i,
                'amountsModel' => 'flexographicsAmounts.' . $i,
            ])->render();
        }

        $this->flexographicSelectMultiple .= "<button
            class='flex w-full mt-2 p-2 bg-teal-600 text-center rounded-full'
            wire:click='addRow(\"flexographic\")'
            wire:loading.attr='disabled'>
                <span class='text-center'>
                    +
                </span>
        </button>";
    }

    public function initializeOffsetTable()
    {
        $this->offsetSelectMultiple = '';

        $this->offsetSelectMultiple .= "<h1 class='text-base'> Offset </h1>";

        for ($i = 0; $i < $this->nRowsOffset; $i++) {
            $this->offsetSelectMultiple .= view('components.horizontal-form', [
                'entities' => Product::where('type', 'offset')->get(),
                'index' => $i,
                'optionsModel' => 'offsets.' . $i,
                'amountsModel' => 'offsetsAmounts.' . $i,
            ])->render();
        }

        $this->offsetSelectMultiple .= "<button
            class='flex mt-2 p-2 w-full bg-teal-600 text-center rounded-full'
            wire:click='addRow(\"offset\")'
            wire:loading.attr='disabled'>
                <span class='text-center'>
                    +
                </span>
        </button>";
    }

    public function addRow($type)
    {
        if ($type === 'flexographic') {
            $this->nRowsFlexographic++;
            $this->flexographicsAmounts[] = 0;
            $this->initializeFlexographicTable();
        } else if ($type === 'offset') {
            $this->nRowsOffset++;
            $this->offsetsAmounts[] = 0;
            $this->initializeOffsetTable();
        }
    }

    public function done()
    {
        for ($i = 0; $i < count($this->flexographics); $i++) {
            $this->products[$this->flexographics[$i]] = $this->flexographicsAmounts[$i];
        }

        for ($i = 0; $i < count($this->offsets); $i++) {
            $this->products[$this->offsets[$i]] = $this->offsetsAmounts[$i];
        }

        $this->emit('productsChosen', $this->products);
    }

    public function render()
    {
        return view('livewire.select-multiple-products-form');
    }
}
