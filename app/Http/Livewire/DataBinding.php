<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBinding extends Component
{
    public $name = 'sakil';
    public $greetings = "hello";
    public $symbol = false;

    public function render()
    {
        return view('livewire.data-binding');
    }
}
