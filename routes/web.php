<?php

use App\Livewire\Home;
use App\Livewire\HomePage;
use App\Livewire\ShowHome;
use App\Livewire\ViewHome;
use App\Livewire\ShowFitur;
use App\Livewire\ShowDetail;
use App\Livewire\ShowArtikel;
use App\Livewire\ShowContact;
use App\Livewire\ShowCatagory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\SocialiteController;
use App\Filament\PewartaFoto\Resources\Artikels\Pages\ViewArtikel;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', HomePage::class);


Route::prefix('show')->group(function () {
    Route::get('/showcatagory', ShowCatagory::class)->name('show.catagory');
    Route::get('/showcontact', ShowContact::class)->name('show.contact');
    Route::get('/showartikel', ShowArtikel::class)->name('show.artikel');
    Route::get('/showfitur', ShowFitur::class)->name('show.fitur');

    Route::get('/{slug}', ShowArtikel::class)->name('show.artikel');
});

Route::get('/photo-pintar', \App\Livewire\PhotoPintar::class)->name('photo.pintar');

    // Route::get('/downloadimage/{record}', [DownloadController::class, 'download']->name('download.image'));

    Route::get('/auth/{provider}/redirect', [SocialiteController::class, 'redirect'])
    ->name('socialite.redirect');
    Route::get('/auth/{provider}/callback', [SocialiteController::class, 'callback'])
    ->name('socialite.callback');

    // Route::prefix('view')->group(function () {
        // Route::get('/viewartikel', ViewArtikel::class)->name('view.artikel');
        // Route::get('/showcontact',  ShowContact::class)->name('show.contact');
        // Route::get('/view/showdetail', ShowDetail::class)->name('show.detail');

        //

        // Route::get('/', function () {
            //     return view('welcome');
            // });
