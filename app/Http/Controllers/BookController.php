<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['judul' => 'Pemrograman PHP', 'penulis' => 'Budi', 'tahun' => 2020],
            ['judul' => 'Laravel untuk Pemula', 'penulis' => 'Sari', 'tahun' => 2021],
            ['judul' => 'Basis Data', 'penulis' => 'Andi', 'tahun' => 2019],
            ['judul' => 'Jaringan Komputer', 'penulis' => 'Rina', 'tahun' => 2022],
            ['judul' => 'Algoritma & Struktur Data', 'penulis' => 'Dedi', 'tahun' => 2018],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}