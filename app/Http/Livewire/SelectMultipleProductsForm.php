<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SelectMultipleProductsForm extends Component
{
    public $products = [];

    public $changesSaved = true;

    public $flexographics = [];
    public $offsets = [];

    public $flexographicsAmounts = [];
    public $offsetsAmounts = [];

    public $nRowsFlexographic = 1;
    public $nRowsOffset = 1;

    public $flexographicSelectMultiple = '';
    public $offsetSelectMultiple = '';
    public $changesSavedHTML = '';

    public $listeners = [
        'orderModalClosed' => 'init'
    ];

    public function updated() {
        $this->changesSaved = false;
        $this->updateChangesSaved();
    }

    public function init()
    {
        $this->products = [];
        $this->changesSaved = true;

        $this->flexographics = [];
        $this->offsets = [];

        $this->flexographicsAmounts = [0];
        $this->offsetsAmounts = [0];

        $this->nRowsFlexographic = 1;
        $this->nRowsOffset = 1;

        $this->initializeFlexographicTable();
        $this->initializeOffsetTable();
        $this->updateChangesSaved();
    }

//    TODO: Add a name attribute to everything?

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
                'remove' => 'removeRow("flexographic",' . $i . ')'
            ])->render();
        }

        $this->flexographicSelectMultiple .= "<button
            class='flex flex-col w-full h-8 mt-2 p-1 bg-teal-600 rounded-full text-center'
            wire:click='addRow(\"flexographic\")'
            wire:loading.attr='disabled'>
                +
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
                'remove' => 'removeRow("offset",' . $i . ')'
            ])->render();
        }

        $this->offsetSelectMultiple .= "<button
            class='flex flex-col h-8 mt-2 p-1 w-full bg-teal-600 rounded-full text-center'
            wire:click='addRow(\"offset\")'
            wire:loading.attr='disabled'>
                +
        </button>";
    }

    public function updateChangesSaved() {
        $this->changesSavedHTML= '';
        if($this->changesSaved) {
            $this->changesSavedHTML .= "<span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\" >
                All Changes Saved
            </span >";
        }
        else {
            $this->changesSavedHTML .= "<span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">
                Some Changes Not Saved
            </span >";
        }
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

    public function removeRow($type, $index)
    {
        if ($type === 'flexographic') {
            $this->nRowsFlexographic--;
            unset($this->flexographics[$index]);
            unset($this->flexographicsAmounts[$index]);
            $this->initializeFlexographicTable();
        } else if ($type === 'offset') {
            $this->nRowsOffset--;
            unset($this->offsets[$index]);
            unset($this->offsetsAmounts[$index]);
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

        $this->changesSaved = true;
        $this->updateChangesSaved();
        $this->emit('productsChosen', $this->products);
    }

    public function render()
    {
        return view('livewire.select-multiple-products-form');
    }
}
