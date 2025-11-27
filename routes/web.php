<?php

use App\Livewire\Home;
use App\Livewire\HomePage;
use App\Livewire\ShowHome;
use App\Livewire\ViewHome;
use App\Livewire\ShowContact;
use Illuminate\Support\Facades\Route;
use App\Filament\PewartaFoto\Resources\Artikels\Pages\ViewArtikel;
use App\Livewire\ShowCatagory;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', HomePage::class);
Route::get('ShowCatagory', ShowCatagory::class)->name('show.catagory');
Route::get('/home', ShowContact::class)->name('show.contact');

// Route::get('/', function () {
//     return view('welcome');
// });
