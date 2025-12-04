<?php

namespace App\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use Illuminate\Support\Carbon;

class ShowArtikel extends Component
{
    public $artikel, $slug, $id;

    public function mount ($slug) {
        // $this->slug = $slug;

        // $this->artikel = Artikel::where('slug', $this->slug)->with('catagory')->first();
        //  $this->artikel->tanggal_published= Carbon::parse($this->artikel->updated_at)->locale('id')->translatedFormat('l, d F Y');
        // $this->artikel = Artikel::get()->first();
         $this->slug = $slug;
        $this->artikel = Artikel::where('slug', $this->slug)->with('catagory')->first();
        $this->artikel->tanggal_published= Carbon::parse($this->artikel->updated_at)->locale('id')->translatedFormat('l, d F Y');
    }

    public function render()
    {
        return view('livewire.show-artikel')->layout('layouts.news');
    }
}
