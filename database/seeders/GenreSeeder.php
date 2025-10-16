<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'description' => 'Genre yang menekankan pada adegan aksi, pertempuran, dan kecepatan.'
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'Genre yang menekankan pada hubungan romantis dan cinta.'
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'description' => 'Genre yang mengeksplorasi imajinasi dan dunia yang tidak nyata.'
        ]);

        Genre::create([
            'name' => 'Science Fiction',
            'description' => 'Genre yang berfokus pada teknologi dan masa depan.'
        ]);

        Genre::create([
            'name' => 'Drama',
            'description' => 'Genre yang menekankan pada konflik emosional dan karakter.'
        ]);
    }
}
