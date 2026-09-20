@extends('layouts.app')

@section('content')
    <h2>{{ $judulAplikasi }}</h2>
    <p>{{ $deskripsiAplikasi }}</p>

    <ul>
        <li>Jumlah Buku: {{ $jumlahBuku }}</li>
        <li>Jumlah Member: {{ $jumlahMember }}</li>
        <li>Jumlah Kategori: {{ $jumlahKategori }}</li>
    </ul>
@endsection