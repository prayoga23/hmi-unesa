<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepengurusan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'periode',
        'konten'
    ];
}
