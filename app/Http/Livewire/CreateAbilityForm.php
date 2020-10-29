<?php


namespace App\Http\Livewire;

use App\Models\Ability;
use Livewire\Component;


class CreateAbilityForm extends Component
{
//    // TODO: Convert to Ability related stuff and namings !!! WATCH OUT !!! ALL WAS COPY-PASTED !!!
    public $confirmingAbilityCreation = false;

    public $name = '';

    public function confirmAbilityCreation()
    {
        $this->name = '';

        $this->dispatchBrowserEvent('confirming-create-ability');

        $this->confirmingAbilityCreation = true;
    }

    public function createAbility() {
        $ability = new Ability();
        $ability->name = $this->name;
        $ability->save();
        $this->emit('abilityCreationCompleted');
    }

    public function render() {
        return view('livewire.create-ability-form');
    }
}
