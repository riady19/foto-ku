<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PhpParser\Node\Expr\FuncCall;
use SebastianBergmann\CodeCoverage\Test\Target\Function_;
use Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator;
use Symfony\Component\HttpKernel\HttpCache\Store;

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

    //  protected function casts(): array
    // {
    //     return [
    //         'option' => 'array',
    //     ];
    // }

    // public function handleSubmit(){
    //     $file = $this->image;
    //     $fileName = time().'.'.$file->getClientOriginalExtension();

    //     Storage::disk('public')->putFileAs('image'. $file. $filename);
    // }
        public Function delete()
        {
            if ($this-> image && Storage::disk('public')->exists($this->image)) {
                Storage::disk('public')->delete($this->image);
            }
            return parent::delete();
        }


    //
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function catagory()
    {
        //  return $this->belongsTo(Catagory::class);
        return $this->belongsTo(Catagory::class);
    }
}
