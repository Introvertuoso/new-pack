<?php


namespace App\Http\Livewire;

use App\Models\RawMaterial;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;


class CreateRoleForm extends Component
{
//    // TODO: Convert to Ability related stuff and namings !!! WATCH OUT !!! ALL WAS COPY-PASTED !!!
    public $confirmingRoleCreation = false;
//
    public $name = '';

    public function confirmRoleCreation()
    {
        $this->name = '';

        $this->dispatchBrowserEvent('confirming-create-role');

        $this->confirmingRoleCreation = true;
    }

//
    public function createRole()
    {
        $Role = new Role();
        $Role->name = $this->name;
        $Role->save();

        $this->emit('roleCreationCompleted');
    }

//
    public function render()
    {
        if (Gate::allows('write-role')) {
            return view('livewire.create-role-form');
        } else {
            return "";
        }
    }
}
