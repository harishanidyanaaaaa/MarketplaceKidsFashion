<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "category";
    protected $primaryKey = "id";
    protected $fillable = ['nama_kategori',
                            'deskripsi'];

    public function product()
    {
        return $this->hasMany(Product::class, 'id_category', 'id');
    }
}
