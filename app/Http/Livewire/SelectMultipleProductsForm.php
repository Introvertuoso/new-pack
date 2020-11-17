<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Product;
use http\Exception\InvalidArgumentException;
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

    public function init() {
        $this->products = [];

        $this->flexographics = [];
        $this->offsets = [];

        $this->flexographicsAmounts = [];
        $this->offsetsAmounts = [];

        $this->nRowsFlexographic = 1;
        $this->nRowsOffset = 1;

        $this->initializeFlexographicTable();
        $this->initializeOffsetTable();
    }

//    TODO: Add a name attribute to everything?

    public function pickProduct($id, $amount) {
        $this->products[$id] = $amount;
    }

    public function unpickProduct($id) {
        unset($this->products[$id]);
    }

    public function initializeFlexographicTable() {
        $this->flexographicSelectMultiple = '';
        for ($i = 0; $i < $this->nRowsFlexographic; $i++) {
            $this->flexographics[$i] = '';
            $this->flexographicsAmounts = 0;
            $this->flexographicSelectMultiple .= view('components.horizontal-form', [
                'entities' => Product::where('type', 'flexographic')->get(),
                'index' => $i,
                'value' => $this->flexographics[$i],
                'amount' => $this->flexographicsAmounts
            ])->render();
        }

        $this->flexographicSelectMultiple .= "<button
              wire:click='addRow(\"flexographic\")'
              wire:loading.attr='disabled'> + </button>";
    }

    public function initializeOffsetTable() {
        $this->offsetSelectMultiple = '';
        for ($i = 0; $i < $this->nRowsOffset; $i++) {
            $this->offsets[$i] = '';
            $this->offsetsAmounts = 0;
            $this->offsetSelectMultiple .= view('components.horizontal-form', [
                'entities' => Product::where('type', 'offset')->get(),
                'index' => $i,
                'value' => $this->offsets[$i],
                'amount' => $this->offsetsAmounts
            ])->render();
        }

        $this->offsetSelectMultiple .= "<button
              wire:click='addRow(\"offset\")'
              wire:loading.attr='disabled'> + </button>";
    }

    public function addRow($type) {
        if ($type === 'flexographic') {
            $this->nRowsFlexographic++;
            $this->initializeFlexographicTable();
        }
        else if ($type === 'offset') {
            $this->nRowsOffset++;
            $this->initializeOffsetTable();
        }
    }

    public function render()
    {
        return view('livewire.select-multiple-products-form');
    }
}
