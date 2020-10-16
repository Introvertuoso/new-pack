<?php


namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\RawMaterial;
use Livewire\Component;


class CreateRawMaterialForm extends Component
{
//    // TODO: Convert to Ability related stuff and namings !!! WATCH OUT !!! ALL WAS COPY-PASTED !!!
    public $confirmingRawMaterialCreation = false;

    public $name = '';
    public $condition = '';
    public $amount = '';

    public function confirmRawMaterialCreation()
    {
        $this->name = '';
        $this->condition =  '';
        $this->amount = '';

        $this->dispatchBrowserEvent('confirming-create-raw-material');

        $this->confirmingRawMaterialCreation = true;
    }

    public function createRawMaterial()
    {
        $rawMaterial = new RawMaterial();
        $rawMaterial->name = $this->name;
        $rawMaterial->condition = $this->condition;
        $rawMaterial->amount = $this->amount;
        $rawMaterial->save();
        redirect('raw-materials');
    }

    public function render() {
        return view('livewire.create-raw-material-form');
    }
}
