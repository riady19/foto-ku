<?php

namespace App\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ShowContact extends Component
{
    public $artikel;
    public function mount()
    {
        $this->artikel = Artikel::where('status', 'publish')->first()->limit(6)->orderBy('created_at', 'desc')->get()->map(function($item){
            $item->tanggal_published = Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y ');
            $item->content = Str::limit($item->content, 200, '...');
            return $item;
        });
    }
    public function render()
    {
        return view('livewire.show-contact')->layout('layouts.news');
    }
}
