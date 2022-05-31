<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Nesting extends Component
{

    public $persons;

    public function mount()
    {
        $this->persons = ['sakil', 'rasel', 'monir'];
    }

    public function render()
    {
        return view('livewire.nesting');
    }
}
