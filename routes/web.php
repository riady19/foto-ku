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
// Route::get('ShowCatagory', ShowCatagory::class)->name('show.catagory');
// Route::get('/home', ShowContact::class)->name('show.contact');

Route::prefix('show')->group(function () {
Route::get('/showcatagory', ShowCatagory::class)->name('show.catagory');
Route::get('/showcontac', ShowContact::class)->name('show.contact');
});
// Route::prefix('view')->group(function () {
// Route::get('/viewartikel', ViewArtikel::class)->name('view.artikel');
// Route::get('/showcontact',  ShowContact::class)->name('show.contact');
// Route::get('/view/showdetail', ShowDetail::class)->name('show.detail');
// Route::get('/{slug}', ShowArtikel::class)->name('show.artikel');

//

// Route::get('/', function () {
//     return view('welcome');
// });
