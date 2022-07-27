<?php

namespace App\Http\Livewire\Backend\Users;

use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('livewire.backend.users.users')->layout('livewire.backend.layout.master')->layoutData(['pageTitle' => 'Users']);
    }
}
