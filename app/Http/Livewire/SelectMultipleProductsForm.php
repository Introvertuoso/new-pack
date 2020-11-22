<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SelectMultipleProductsForm extends Component
{
    public $products = [];

//    public $changesSaved = true;

    public $flexographic = [];
    public $offset = [];

    public $flexographicAmounts = [];
    public $offsetAmounts = [];

    public $nRowsFlexographic = 1;
    public $nRowsOffset = 1;

    public $tabContent = '';

//    public $flexographicSelectMultiple = '';
//    public $offsetSelectMultiple = '';
//    public $changesSavedHTML = '';

    public $listeners = [
        'orderModalClosed' => 'init',
//        'confirmingOrder' => 'done'
    ];

    public function updated() {
        $this->done();
    }

    public function init()
    {
        $this->products = [];
//        $this->changesSaved = true;

        $this->flexographic = [];
        $this->offset = [];

        $this->flexographicAmounts = [0];
        $this->offsetAmounts = [0];

        $this->nRowsFlexographic = 1;
        $this->nRowsOffset = 1;

        $this->tabContent = '';

//        $this->initializeFlexographicTable();
//        $this->initializeOffsetTable();
//        $this->updateChangesSaved();
    }

//    TODO: Add a name attribute to everything?

    public function initializeTab($type)
    {
        $this->tabContent = '';

//        $this->tabContent .= "<h1 class='text-base'>" . ucwords($type) . "</h1>";
        $this->tabContent .= "<div class='mt-3'></div>";

        $counter = $type === 'flexographic' ? $this->nRowsFlexographic : 0;
        $counter = $type === 'offset' ? $this->nRowsOffset : $counter;

        for ($i = 0; $i < $counter; $i++) {
            $this->tabContent .= view('components.horizontal-form', [
                'entities' => Product::where('type', $type)->get(),
                'index' => $i,
                'optionsModel' => $type . '.' . $i,
                'amountsModel' => $type . 'Amounts.' . $i,
                'remove' => 'removeRow(\'' . $type . '\',' . $i . ')'
            ])->render();
        }

        $this->tabContent .= "<button
            style='width: 353px'
            class='flex flex-col h-full w-full h-8 mb-3 mt-2 p-1 bg-teal-600 rounded-full text-center'
            wire:click='addRow(\"$type\")'
            wire:loading.attr='disabled'>
                +
        </button>";
    }

//    public function initializeFlexographicTable()
//    {
//        $this->flexographicSelectMultiple = '';
//
//        $this->flexographicSelectMultiple .= "<h1 class='text-base'> Flexographic </h1>";
//
//        for ($i = 0; $i < $this->nRowsFlexographic; $i++) {
////            $this->flexographic[$i] = '';
////            $this->flexographicAmounts[$i] = 0;
//            $this->flexographicSelectMultiple .= view('components.horizontal-form', [
//                'entities' => Product::where('type', 'flexographic')->get(),
//                'index' => $i,
//                'optionsModel' => 'flexographic.' . $i,
//                'amountsModel' => 'flexographicAmounts.' . $i,
//                'remove' => 'removeRow("flexographic",' . $i . ')'
//            ])->render();
//        }
//
//        $this->flexographicSelectMultiple .= "<button
//            style='width: 353px'
//            class='flex flex-col h-full w-full h-8 mt-2 p-1 bg-teal-600 rounded-full text-center'
//            wire:click='addRow(\"flexographic\")'
//            wire:loading.attr='disabled'>
//                +
//        </button>";
//    }
//
//    public function initializeOffsetTable()
//    {
//        $this->offsetSelectMultiple = '';
//
//        $this->offsetSelectMultiple .= "<h1 class='text-base'> Offset </h1>";
//
//        for ($i = 0; $i < $this->nRowsOffset; $i++) {
//            $this->offsetSelectMultiple .= view('components.horizontal-form', [
//                'entities' => Product::where('type', 'offset')->get(),
//                'index' => $i,
//                'optionsModel' => 'offset.' . $i,
//                'amountsModel' => 'offsetAmounts.' . $i,
//                'remove' => 'removeRow("offset",' . $i . ')'
//            ])->render();
//        }
//
//        $this->offsetSelectMultiple .= "<button
//            style='width: 353px'
//            class='flex flex-col h-full h-8 mt-2 p-1 w-full bg-teal-600 rounded-full text-center'
//            wire:click='addRow(\"offset\")'
//            wire:loading.attr='disabled'>
//                +
//        </button>";
//    }

//    public function updateChangesSaved() {
//        $this->changesSavedHTML= '';
//        if($this->changesSaved) {
//            $this->changesSavedHTML .= "<span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\" >
//                All Changes Saved
//            </span >";
//        }
//        else {
//            $this->changesSavedHTML .= "<span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">
//                Some Changes Not Saved
//            </span >";
//        }
//    }

    public function addRow($type)
    {
        if ($type === 'flexographic') {
            $this->nRowsFlexographic++;
            $this->flexographicAmounts[] = 0;
            $this->initializeTab($type);
//            $this->initializeFlexographicTable();
        } else if ($type === 'offset') {
            $this->nRowsOffset++;
            $this->offsetAmounts[] = 0;
            $this->initializeTab($type);
//            $this->initializeOffsetTable();
        }
    }

    public function removeRow($type, $index)
    {
        if ($type === 'flexographic') {
//            TODO: Fix remove and re-add bug
            $this->nRowsFlexographic--;
            \array_splice($this->flexographic, $index, 1);
            \array_splice($this->flexographicAmounts, $index, 1);
//            unset($this->flexographic[$index]);
//            unset($this->flexographicAmounts[$index]);
            $this->initializeTab($type);
//            $this->initializeFlexographicTable();
        } else if ($type === 'offset') {
            $this->nRowsOffset--;
            \array_splice($this->offset, $index, 1);
            \array_splice($this->offsetAmounts, $index, 1);
//            unset($this->offset[$index]);
//            unset($this->offsetAmounts[$index]);
            $this->initializeTab($type);
//            $this->initializeOffsetTable();
        }
    }

    public function done()
    {
        for ($i = 0; $i < count($this->flexographic); $i++) {
            $this->products[$this->flexographic[$i]] = $this->flexographicAmounts[$i];
        }

        for ($i = 0; $i < count($this->offset); $i++) {
            $this->products[$this->offset[$i]] = $this->offsetAmounts[$i];
        }

//        $this->changesSaved = true;
//        $this->updateChangesSaved();
        $this->emit('productsChosen', $this->products);
    }

    public function render()
    {
        return view('livewire.select-multiple-products-form');
    }
}
