<?php

namespace App\Livewire;

use App\Models\Artikel;
use Livewire\Component;

class HomePage extends Component
{
    public $artikel;
    public function mount()
    {
        // $this->artikels = Artikel::all();
        $this->artikel = Artikel::with('catagory')->orderBy('created_at', 'desc')->limit(1)->get();

    }
    public function render()
    {
        // $artikels = Artikel::all();
        return view('livewire.home-page')->layout('layouts.news');
    }
}
