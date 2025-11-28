<?php

namespace App\Livewire;

use App\Models\Author;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ShowAuthor extends Component
{
    // public function mount()
    // {
    //      $this->author = Author::where('name', 'id')->limit(6)->orderBy('created_at', 'desc')->offset(1)->map(function($item){
    //         $item->tanggal_published = Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y ');
    //         $item->content = Str::limit($item->content, 200, '...');
    //         // $artikel = Artikel::where('status', 'published')->get();
    //         return $item;
    //     });

    //     // $this->author = Author::all();
    //     // $this->author = Author::get('id');

    // }
    public function render()
    {
        // $authors = Author::class('name', 'ASC')->get();
        return view('livewire.show-author', [
            'authors' => Author::all()
        ])->layout('layouts-news');
    }
}
