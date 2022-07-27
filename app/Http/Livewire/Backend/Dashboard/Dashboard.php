<?php

namespace App\Http\Livewire\Backend\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.dashboard.dashboard')->layout('livewire.backend.layout.master')->layoutData(['pageTitle' => 'Dashboard']);
    }
}
