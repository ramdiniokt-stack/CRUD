@extends('layouts.app')

@section('content')
    <h2>Daftar Buku</h2>
    <ul>
        @foreach($books as $book)
            <li>
                ID: {{ $book->id }} —
                {{ $book->title }} —
                {{ $book->author }}
                ({{ $book->year }}) —
                Stok: {{ $book->stock }}
            </li>
        @endforeach
    </ul>
@endsection