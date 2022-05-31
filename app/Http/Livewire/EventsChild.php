<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventsChild extends Component
{
    public $person;
    public $listeners = ['refreshChildEvent'];

    public function refreshChild()
    {
        $this->emit('refreshChildEvent');
    }
    public function refreshChildAndParent()
    {
        $this->emitUp('refreshChildEvent');
    }

    public function refreshChildEvent()
    {
        //
    }
    public function mount($person)
    {
        $this->person = $person;
    }
    public function render()
    {
        return view('livewire.events-child');
    }
}
