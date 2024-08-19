<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Publikasi extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = "publikasi";
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'user_id',
        'kategori_publikasi_id',
        'judul',
        'tanggal_rilis',
        'deskripsi',
        'gambar',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function kategori()
    {
        return $this->hasOne('App\KategoriPublikasi', 'id', 'kategori_publikasi_id');
    }
    public function komentar()
    {
        return $this->hasMany('App\KomentarPublikasi', 'publikasi_id');
    }
}
