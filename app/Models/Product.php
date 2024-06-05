<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $primaryKey = "id";
    protected $fillable = ['nama_produk',
                            'deskripsi',
                            'harga',
                            'stok',
        'foto_produk',
                            'id_kategori'];

    public function kategori()
    {
        return $this->belongsTo(Category::class, 'id_kategori', 'id');
    }
}