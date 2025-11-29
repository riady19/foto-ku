<?php

namespace App\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Livewire\WithPagination;

class ListFoto extends Component
{

    public $artikel;

    public $query = '';

    // public function search()
    // {
    //     $this->resetPage();
    // }
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

// public function render()
//     {
//         // 1. Buat Query Dasar
//         $query = Artikel::where('status', 'publish')
//                         ->orderBy('created_at', 'desc');

//         // 2. Tambahkan Logika Pencarian (Search)
//         if (!empty($this->search)) {
//             $searchTerm = '%' . $this->search . '%';

//             // Mencari di kolom 'title' ATAU 'content'
//             $query->where(function ($q) use ($searchTerm) {
//                 $q->where('title', 'like', $searchTerm)
//                   ->orWhere('content', 'like', $searchTerm);
//             });
//         }

//         // 3. Ambil Data dan Terapkan Pagination
//         $artikelsPaginated = $query->paginate(2); // 10 adalah jumlah item per halaman

//         // 4. Format Data (seperti di mount)
//         $artikelsFormatted = $artikelsPaginated->through(function ($item) {
//             $item->tanggal_published = Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y ');
//             $item->content = Str::limit($item->content, 200, '...');
//             return $item;
//         });

//         return view('livewire.list-foto', [
//             'artikels' => $artikelsFormatted,
//         ]);
//     }

    public function render()
    {
        // $this->artikel = Artikel::all();
         return view('livewire.list-foto', [
            'artikels' => Artikel::where('title', 'like', '%'.$this->query.'%')->paginate(2),
        ]);
    }
        // return view('livewire.list-foto', [
        //     'artikels' => Artikel::paginate(2),
        // ]);
    }

