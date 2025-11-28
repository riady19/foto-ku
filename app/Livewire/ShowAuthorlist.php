<?php

namespace App\Livewire;

use App\Models\Author;
use Livewire\Component;

class ShowAuthorlist extends Component
{
    public function render()
    {
        return view('livewire.show-authorlist', [
            'authors' => Author::where('occupation', 'fotografer')->get()
        ]);
    }
}
