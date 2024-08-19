<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarBerita extends Model
{
    use HasFactory;
    protected $table = "komentar_berita";
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'berita_id',
        'nama',
        'email',
        'komentar'
    ];
}
