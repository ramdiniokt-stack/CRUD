@extends('layouts.app')

@section('content')
    <h2>Daftar Kategori</h2>
    <ul>
        @foreach($categories as $category)
            <li>
                {{ $category['nama'] }} ({{ $category['jumlah_buku'] }} buku)
            </li>
        @endforeach
    </ul>
@endsection