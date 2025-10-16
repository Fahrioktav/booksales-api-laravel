<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Penulis novel populer dengan karya-karya inspiratif.',
        ]);

        Author::create([
            'name' => 'Mark Manson',
            'photo' => 'mark_manson.jpg',
            'bio' => 'Penulis buku pengembangan diri dengan gaya jujur dan sarkastik.',
        ]);

        Author::create([
            'name' => 'Andrea Hirata',
            'photo' => 'andrea_hirata.jpg',
            'bio' => 'Penulis terkenal dari Indonesia lewat novel Laskar Pelangi.',
        ]);

        Author::create([
            'name' => 'Dewi Lestari',
            'photo' => 'dee_lestari.jpg',
            'bio' => 'Penulis dan musisi Indonesia, pencipta seri Supernova.',
        ]);

        Author::create([
            'name' => 'J.K. Rowling',
            'photo' => 'jk_rowling.jpg',
            'bio' => 'Penulis dunia sihir terkenal lewat seri Harry Potter.',
        ]);
    }
}
