<?php


namespace App\Http\Livewire;

use App\Models\Client;
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
        $client = new Client();
        $client->name = $this->name;
        $client->contact = $this->contact;
        $client->address = $this->address;
        $client->save();
        redirect('clients');
    }

    public function render() {
        return view('livewire.create-client-form');
    }
}
