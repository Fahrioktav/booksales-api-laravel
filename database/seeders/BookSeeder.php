<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Kisah seorang pemuda yang mencari jati diri dan makna rumah.',
            'price' => 40000,
            'stock' => 10,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ]);

        Book::create([
            'title' => 'Pergi',
            'description' => 'Petualangan lanjutan dari kisah Pulang karya Tere Liye.',
            'price' => 45000,
            'stock' => 12,
            'cover_photo' => 'pergi.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ]);

        Book::create([
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku tentang cara hidup realistis dan santai karya Mark Manson.',
            'price' => 60000,
            'stock' => 8,
            'cover_photo' => 'bodo_amat.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Cerita inspiratif anak-anak di Belitung yang penuh semangat belajar.',
            'price' => 50000,
            'stock' => 15,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ]);

        Book::create([
            'title' => 'Supernova',
            'description' => 'Novel filosofis dan ilmiah karya Dee Lestari.',
            'price' => 70000,
            'stock' => 9,
            'cover_photo' => 'supernova.jpg',
            'genre_id' => 4,
            'author_id' => 4,
        ]);
    }
}
