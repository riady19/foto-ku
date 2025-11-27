<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $fillable = [
        'name',
        'occupation',
        'avatar',
        'slug',
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
