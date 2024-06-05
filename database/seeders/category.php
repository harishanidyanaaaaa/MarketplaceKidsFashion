<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
          
            'id' => 1,
            'nama_kategori' => 'Elektronik',
            'deskripsi' => 'Kategori produk elektronik'
        ]);
        \App\Models\Category::create([
             
                'id' => 2,
                'nama_kategori' => 'Fashion',
                'deskripsi' => 'Kategori produk fashion'
        ]);
    }
}
