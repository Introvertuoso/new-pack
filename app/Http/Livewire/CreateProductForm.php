<?php


namespace App\Http\Livewire;

use App\Models\Flexographic;
use App\Models\Offset;
use App\Models\Product;
use Livewire\Component;


class CreateProductForm extends Component
{
    // TODO: Convert to Ability related stuff and namings !!! WATCH OUT !!! ALL WAS COPY-PASTED !!!
    public $confirmingProductCreation = false;

    public $clientName = '';
    public $type = '';
    public $amount = 0;
    // TODO: Here goes the flexographic related inputs
    // TODO: Here goes the offset related inputs

    public $flexographicDetails = '';
    public $offsetDetails = '';

    public function confirmProductCreation()
    {
        $this->clientName = '';
        $this->type = '';
        $this->amount = 0;

        $this->dispatchBrowserEvent('confirming-create-product');

        $this->confirmingProductCreation = true;
    }

    public function createProduct()
    {
        $product = new Product();
        $product->client_name = $this->clientName;
        $product->amount = $this->amount;
        $product->type = $this->type;
        $product->save();

        if ($this->type == 'flexographic') {
            $flexographic = new Flexographic();
            $flexographic->product_id = $product->id;
            // TODO: Here goes the corresponding attributes
            $flexographic->save();
        }
        else if ($this->type == 'offset') {
            $offset = new Offset();
            $offset->product_id = $product->id;
            // TODO: Here goes the corresponding attributes
            $offset->save();
        }

        $this->emit('productCreationCompleted');
        $this->dispatchBrowserEvent('productCreationCompleted');
    }

    public function renderDetailsSection($printType)
    {
        if ($printType == 'Offset') {
            $this->offsetDetails = view('livewire.offset-creation-details')->render();
            $this->flexographicDetails = '';
            $this->type = 'offset';
        } else if ($printType == 'Flexographic') {
            $this->flexographicDetails = view('livewire.flexographic-creation-details')->render();
            $this->offsetDetails = '';
            $this->type = 'flexographic';
        }
    }

    public function render()
    {
        return view('livewire.create-product-form');
    }
}
