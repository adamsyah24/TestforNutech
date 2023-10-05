<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['kategori_id','nama_produk', 'harga_beli', 'harga_jual', 'gambar_produk'];

    public function kateQ()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
