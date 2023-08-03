@extends('layouts.app')

@section('content')
    <div class = "container">
        <h2>Hasil Pencarian untuk "{{ $keyword }}"</h2>
        @if (count($artikels) > 0)
            <ul>
                @foreach ($artikels as $artikel)
                    <li>{{ $artikel->judul }}</li>
                @endforeach
            </ul>
        @else
            <p>Tidak ada artikel yang ditemukan.</p>
        @endif
    </div>
@endsection
