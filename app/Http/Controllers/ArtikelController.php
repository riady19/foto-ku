<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\View\View;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
  public function ShowArtikel (string $id): View
    {
        return view('show.artikel', [
            'aritkels' => Artikel::findOrFail($id)
        ]);
    }
}
