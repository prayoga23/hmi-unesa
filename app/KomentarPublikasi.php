<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarPublikasi extends Model
{
    use HasFactory;
    protected $table = "komentar_publikasi";
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'publikasi_id',
        'nama',
        'email',
        'komentar'
    ];
}
