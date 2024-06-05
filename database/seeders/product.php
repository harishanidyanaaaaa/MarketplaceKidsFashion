<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([
           
            'id' => 1,
            'nama_produk' => 'Laptop',
            'deskripsi' => 'Laptop Asus',
            'harga' => 10000000,
            'stok' => 10,
            'foto_produk' => 'laptop.jpg',
            'id_kategori' => 1
        ]);
        \App\Models\Product::create([
           
            'id' => 2,
            'nama_produk' => 'Smartphone',
            'deskripsi' => 'Smartphone Samsung',
            'harga' => 5000000,
            'stok' => 20,
            'foto_produk' => 'smartphone.jpg',
            'id_kategori' => 1
        ]);
    
    }
}
