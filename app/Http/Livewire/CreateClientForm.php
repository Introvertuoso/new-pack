<?php


namespace App\Http\Livewire;

use Livewire\Component;


class CreateClientForm extends Component
{
    public $name = '';
    public $contact = '';
    public $address = '';

    public function confirmClientCreation()
    {
        $this->name = '';
        $this->contact =  '';
        $this->address = '';

//        $this->dispatchBrowserEvent('confirming-create-client');
    }

    public function createClient() {
        dd([$this->name, $this->contact, $this->address]);
    }

    public function render() {
        return view('livewire.create-client-form');
    }
}
