<?php

namespace App\Livewire;

use App\Models\Artikel;
use Livewire\Component;

class ShowHome extends Component
{

    public function render()
    {
        $artikels = Artikel::orderBy('title', 'ASC')->get();
        return view('livewire.show-home', [
            'artikels' => $artikels
        ]);
    }
}
