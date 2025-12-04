<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoArtikel extends Model
{
    protected $table ='foto_artikels';
    protected $fillable = [
        'title',
        'image',
        'description',
    ];
}
