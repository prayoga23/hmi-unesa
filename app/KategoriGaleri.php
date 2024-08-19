<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    use HasFactory;
    protected $table = "kategori_galeri";
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'nama_kategori'
    ];
    public function galeri()
    {
        return $this->hasMany('App\Galeri', 'kategori_galeri_id');
    }
}
