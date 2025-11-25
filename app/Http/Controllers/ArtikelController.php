<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\View\View;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
  public function show(string $id): View
    {
        return view('home', [
            'aritkels' => Artikel::findOrFail($id)
        ]);
    }
}
