<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15, 
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ],

        [
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang.',
            'price' => 25000,
            'stock' => 5, 
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ],

        [
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif perjuangan anak-anak Belitung dalam meraih pendidikan.',
            'price' => 35000,
            'stock' => 20, 
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ],

        [
            'title' => 'Negeri 5 Menara',
            'description' => 'Perjalanan enam santri yang memiliki mimpi besar dan keyakinan kuat.',
            'price' => 30000,
            'stock' => 10, 
            'cover_photo' => 'negeri_5_menara.jpg',
            'genre_id' => 1,
            'author_id' => 4,
        ],

        [
            'title' => 'Dilan 1990',
            'description' => 'Kisah cinta remaja antara Dilan dan Milea di Bandung tahun 1990.',
            'price' => 28000,
            'stock' => 8, 
            'cover_photo' => 'dilan_1990.jpg',
            'genre_id' => 4,
            'author_id' => 5,
        ],
    ];

    public function getBooks() {
        return $this->books;
    }
}
