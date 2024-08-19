<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;
    protected $table = "kategori_berita";
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'nama_kategori'
    ];
    public function berita()
    {
        return $this->hasMany('App\Berita', 'kategori_berita_id');
    }
}
