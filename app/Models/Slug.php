<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slug extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "slugs";
    protected $primarykey = "id";
    protected $fillable = ['id', 'judul', 'slug', 'isi'];
}
