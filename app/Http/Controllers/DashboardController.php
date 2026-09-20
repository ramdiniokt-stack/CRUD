<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $judulAplikasi = 'Library System';
        $deskripsiAplikasi = 'Aplikasi manajemen perpustakaan sederhana berbasis Laravel.';
        $jumlahBuku = 5;
        $jumlahMember = 5;
        $jumlahKategori = 5;

        return view('dashboard.index', compact(
            'judulAplikasi',
            'deskripsiAplikasi',
            'jumlahBuku',
            'jumlahMember',
            'jumlahKategori'
        ));
    }
}