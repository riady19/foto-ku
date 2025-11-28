<?php

namespace App\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Livewire\WithPagination;

class ListFoto extends Component
{
    use WithPagination;
    public $artikel;
    public $artikels;
    public function mount()
    {

        // {{ $artikel->status == 'draft' ? 'hidden' : 'flex' }}
        $this->artikel = Artikel::where('status', 'publish')->limit(6)->orderBy('created_at', 'desc')->offset(1)->get()->map(function($item){
            $item->tanggal_published = Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y ');
            $item->content = Str::limit($item->content, 200, '...');
            // $artikel = Artikel::where('status', 'published')->get();
            return $item;
        });
    }
    public function render()
    {
        // $this->artikel = Artikel::all();
        return view('livewire.list-foto', [
            'artikels' => Artikel::all(),
        ]);
    }
}
