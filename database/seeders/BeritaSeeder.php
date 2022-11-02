<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::insert([
            'judul' => "Naruto",
            'isi' => "Perang Dunia",
            'gambar' => "naruto.webp"
        ], [
            'judul' => "Naruto",
            'isi' => "Perang Dunia",
            'gambar' => "naruto.webp"
        ]);
    }
}
