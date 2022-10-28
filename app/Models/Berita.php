<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    public $timestamps = false;
    protected $fillable = [
        'judul', 'gambar', 'isi', 'user_id'
    ];
}
