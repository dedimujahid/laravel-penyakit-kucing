<!-- resources/views/artikel/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class = "container">
    @if ($artikel->gambar)
        <img src = "{{ asset($artikel->gambar) }}" alt = "{{ $artikel->judul }}" style = "max-width: 400px;">
    @endif
    <h2>{{ $artikel->judul }}</h2>
    <p>{{ $artikel->isi }}</p>
               <p>Penulis: {{ $artikel->penulis }}</p>
               <p>{{ $artikel->konten }}</p>
    <p>Tanggal Publikasi : {{ $artikel->tanggal_publikasi }}</p>

    <hr>

    <h6>Komentar</h6>
    <!-- ... -->
</div>
@endsection
