<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukImageSlug extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'description',
        'slug'
    ];

    static public function getSlug($slug){
        return self::select('produk_image_slugs.*')
        ->where('slug', '=', $slug)
        ->first();
    }
}
