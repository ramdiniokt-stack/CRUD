@extends('layouts.app')

@section('content')
    <h2>Daftar Member</h2>
    <ul>
        @foreach($members as $member)
            <li>
                {{ $member['nama'] }} —
                @if($member['status'] === 'aktif')
                    <strong>Aktif</strong>
                @else
                    Tidak Aktif
                @endif
            </li>
        @endforeach
    </ul>
@endsection