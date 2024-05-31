<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'id';

    protected $fillable = [
        'namaproduk',
        'harga',
        'deskripsi',
        'kategori',
        'tersedia',
        'gambar',
        'stok',
    ];
}
