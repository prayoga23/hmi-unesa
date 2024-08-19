<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPublikasi extends Model
{
    use HasFactory;
    protected $table = "kategori_publikasi";
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'nama_kategori'
    ];
    public function publikasi()
    {
        return $this->hasMany('App\Publikasi', 'kategori_publikasi_id');
    }
}
