<?php

namespace App\Livewire;

use Livewire\Component;

class ShowCatagory extends Component
{
    public function render()
    {
        return view('livewire.show-catagory')->layout('layouts.news');
    }
}
