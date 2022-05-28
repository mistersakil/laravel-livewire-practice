<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBindingExample extends Component
{
    public $name = 'sakil';
    public $greetings = 'hi';
    public $gender = 'male';
    public $isTrue = false;
    public $hobies = [];

    public function render()
    {
        return view('livewire.data-binding-example');
    }
}
