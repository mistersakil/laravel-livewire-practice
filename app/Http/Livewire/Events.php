<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Events extends Component
{
    public $persons;
    public $listeners = ['refreshChildEvent'];

    public function refreshChildEvent(){
        
    }

    public function mount()
    {
        $this->persons = ['hasan', 'mamun', 'mahmbud'];
    }
    public function render()
    {
        return view('livewire.events');
    }
}
