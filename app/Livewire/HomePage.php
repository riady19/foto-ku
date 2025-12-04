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
        $this->artikel = Artikel::with('catagory')->whereIn('catagory_id', ['1', '2', '3', '4'])->orderBy('created_at', 'desc')->limit(1)->get();

    }
    public function render()
    {
        // $artikels = Artikel::all();
        return view('livewire.home-page')->layout('layouts.news');
    }
}
