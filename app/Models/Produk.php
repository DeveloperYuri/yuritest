<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Produk extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'nama',
        'deskripsi'
    ];

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama
        ];
    }
}
