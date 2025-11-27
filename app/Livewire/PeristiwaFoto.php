<?php

namespace App\Livewire;

use App\Models\Artikel;
use App\Models\Catagory;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class PeristiwaFoto extends Component
{

     public $artikel, $catagory_id, $tranding;
    public function mount()
    {
         $this->artikel = Artikel::where('catagory_id', '3')->where('catagory_id', 3)->where('status', 'publish')->limit(1)->orderBy('created_at', 'desc')->get()->map(function($item){$item->tanggal_published = Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y');
        // $this->artikel = Artikel::where('katagori_id', '3')->where('katagori_id', 3)->offset(1)->limit(3)->orderBy('created_at', 'desc')->get()->map(function($item){$item->tanggal_publish = Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y');
        // $this->artikel = Artikel::where('status', 'published')->first()->limit(2)->orderBy('created_at', 'desc')->get()->map(function($item){
            $item->tanggal_published = Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y ');
            $item->konten = Str::limit($item->content, 200, '...');
            $item->katagori_id = Catagory::where( $item->Catagory, 'id');
            return $item;
        });
    }
    public function render()
    {
        return view('livewire.peristiwa-foto');
    }
}
