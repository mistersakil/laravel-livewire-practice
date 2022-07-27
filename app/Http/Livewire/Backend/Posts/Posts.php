<?php

namespace App\Http\Livewire\Backend\Posts;

use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        return view('livewire.backend.posts.posts')->layout('livewire.backend.layout.master')->layoutData(['pageTitle' => 'Posts']);
    }
}
