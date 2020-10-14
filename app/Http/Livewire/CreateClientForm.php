<?php


namespace App\Http\Livewire;

use Livewire\Component;


class CreateClientForm extends Component
{
    public $confirmingClientCreation = false;

    public $name = '';
    public $contact = '';
    public $address = '';

    public function confirmClientCreation()
    {
        $this->name = '';
        $this->contact =  '';
        $this->address = '';

        $this->dispatchBrowserEvent('confirming-create-client');

//        $this->confirmingClientCreation = true;
        $this->confirmingClientCreation = !$this->confirmingClientCreation;
    }

    public function createClient() {

    }

    public function render() {
        return view('livewire.create-client-form');
    }
}
