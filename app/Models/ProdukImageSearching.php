<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

class ProdukImageSearching extends Model
{
    use HasFactory, Notifiable, Searchable;

    protected $fillable = [
        'image',
        'description'
    ];

    public function toSearchableArray()
    {
        return [
            'description' => $this->description
        ];
    }
}
