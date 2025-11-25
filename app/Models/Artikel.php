<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{

    use HasFactory;
    // protected $table = 'artikels';
    protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
        'catagory_id',
        'author_id',
        'is_tranding',
        'status',
    ];


    //
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function catagory()
    {
        //  return $this->belongsTo(Catagory::class);
        return $this->belongsTo(Catagory::class, 'catagory_id');
    }
}
