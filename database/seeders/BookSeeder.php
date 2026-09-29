<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Pemrograman PHP',      'author' => 'Andi',  'year' => 2024, 'stock' => 5],
            ['title' => 'Laravel untuk Pemula', 'author' => 'Budi',  'year' => 2023, 'stock' => 8],
            ['title' => 'Basis Data',           'author' => 'Citra', 'year' => 2022, 'stock' => 3],
            ['title' => 'Pemrograman Web',      'author' => 'Dewi',  'year' => 2021, 'stock' => 6],
            ['title' => 'Struktur Data',        'author' => 'Eko',   'year' => 2020, 'stock' => 4],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}