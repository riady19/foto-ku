<?php

namespace App\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use App\Models\Catagory;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ListShowArtikel extends Component
{
     public $artikel;

    public function mount()
    {
        $this->artikel = Artikel::with('catagory')->orderBy('created_at', 'desc')->get();
        // $this->artikel = Artikel::find($this->artikel = 'id');
        // $this->artikel = Artikel::with('Katagori')->orderBy('created_at', 'desc')->get();
        // $this->artikel = User::with('user')->orderBy('id');

    }
    public function render()
    {
        return view('livewire.list-show-artikel');
    }
}
