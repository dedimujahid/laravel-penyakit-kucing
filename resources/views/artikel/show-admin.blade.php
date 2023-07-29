<!-- resources/views/artikel/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class = "container">
    <h2>{{ $artikel->judul }}</h2>
    <p>{{ $artikel->isi }}</p>
               <p>Penulis: {{ $artikel->penulis }}</p>
    <p>Tanggal Publikasi : {{ $artikel->tanggal_publikasi }}</p>

    @if ($artikel->gambar)
        <img src = "{{ asset($artikel->gambar) }}" alt = "{{ $artikel->judul }}" style = "max-width: 400px;">
    @endif

    <hr>

    <h3>Komentar</h3>
    <!-- ... -->
</div>
@endsection
