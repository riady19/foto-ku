<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\HttpCache\Store;

class DownloadController extends Controller
{
    // public function download($artikel) {
    //     $data = Artikel::select('id', 'image')->where('model_id', $artikel)->first();
    //     $image = Storage::disk('public')->path($data->id.'/'.$data->image);
    //     return response()->download($image);
    // }
}
