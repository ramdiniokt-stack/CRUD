<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            ['nama' => 'Fiksi', 'jumlah_buku' => 12],
            ['nama' => 'Non-Fiksi', 'jumlah_buku' => 8],
            ['nama' => 'Teknologi', 'jumlah_buku' => 15],
            ['nama' => 'Sejarah', 'jumlah_buku' => 6],
            ['nama' => 'Sains', 'jumlah_buku' => 10],
        ];

        return view('categories.index', compact('categories'));
    }
}