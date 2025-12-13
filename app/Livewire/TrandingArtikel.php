<?php

namespace App\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class TrandingArtikel extends Component
{
    public $artikel;
        public function mount() {
            $this->artikel = Artikel::where('status', 'publish')->where('is_tranding', 1)->limit(6)->orderBy('created_at', 'desc')->get()->map(function($item){$item->tanggal_publish = Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y');
                $item->title = Str::limit($item->title, 50, '...');
                return $item;

        });
        }
    public function render()
    {
        return view('livewire.tranding-artikel')->layout('layouts.news');
    }
}
