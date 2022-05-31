<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NestingChild extends Component
{
    public $person;
    public function mount($person)
    {
        $this->person = $person;
    }
    public function render()
    {
        return view('livewire.nesting-child');
    }
}
