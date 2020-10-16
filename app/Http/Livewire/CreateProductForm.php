<?php


namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;


class CreateProductForm extends Component
{
//    // TODO: Convert to Ability related stuff and namings !!! WATCH OUT !!! ALL WAS COPY-PASTED !!!
    public $confirmingProductCreation = false;

    public $clientName = '';
    public $amount = '';

    public function confirmClientCreation()
    {
        $this->clientName = '';
        $this->amount =  '';

        $this->dispatchBrowserEvent('confirming-create-product');

        $this->confirmingProductCreation = true;
    }

    public function createProduct() {
        $product = new Product();
        $product->clientName = $this-> clientName;
        $product->amount = $this-> amount;
        $product -> save();
        redirect( 'product');
    }

    public function render() {
        return view('livewire.create-product-form');
    }
}
