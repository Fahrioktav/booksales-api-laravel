<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $fillable = [
        'name',
        'country',
        'birth_year',
    ];

    private $authors = [
        [
            'id' => 1,
            'name' => 'Tere Liye',
            'country' => 'Indonesia',
            'birth_year' => 1979,
        ],
        [
            'id' => 2,
            'name' => 'Mark Manson',
            'country' => 'Amerika Serikat',
            'birth_year' => 1984,
        ],
        [
            'id' => 3,
            'name' => 'Andrea Hirata',
            'country' => 'Indonesia',
            'birth_year' => 1967,
        ],
        [
            'id' => 4,
            'name' => 'Ahmad Fuadi',
            'country' => 'Indonesia',
            'birth_year' => 1972,
        ],
        [
            'id' => 5,
            'name' => 'Pidi Baiq',
            'country' => 'Indonesia',
            'birth_year' => 1972,
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
