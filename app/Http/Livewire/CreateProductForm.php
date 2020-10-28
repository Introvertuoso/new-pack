<?php


namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;


class CreateProductForm extends Component
{
    // TODO: Convert to Ability related stuff and namings !!! WATCH OUT !!! ALL WAS COPY-PASTED !!!
    public $confirmingProductCreation = false;

    public $clientName = '';
    public $type = '';
    public $flexographicDetails = '';
    public $offsetDetails = '';
    public $amount = '';

    public function confirmProductCreation()
    {
        $this->clientName = '';
        $this->type = '';
        $this->amount = '';

        $this->dispatchBrowserEvent('confirming-create-product');

        $this->confirmingProductCreation = true;
    }

    public function createProduct()
    {
        $product = new Product();
        $product->client_name = $this->clientName;
        $product->amount = $this->amount;
        $product->save();
        redirect('products');
    }

    public function renderDetailsSection($printType)
    {
        if ($printType == 'Offset') {
            $this->offsetDetails = view('livewire.offset-creation-details')->render();
            $this->flexographicDetails = '';
        } else if ($printType == 'Flexographic') {
            $this->flexographicDetails = view('livewire.flexographic-creation-details')->render();
            $this->offsetDetails = '';
        }
    }

    public function render()
    {
        return view('livewire.create-product-form');
    }
}
