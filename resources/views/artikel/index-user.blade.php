<!-- resources/views/artikel/index-user.blade.php -->
@extends('layouts.app')

@section('content')
<div class = "container">
    <h2>Daftar Artikel</h2>

    <!-- Tampilkan pesan jika tidak ada artikel -->
    @if(count($artikels) === 0)
        <p>Tidak ada artikel.</p>
    @endif

    <div class="row">
        @foreach($artikels as $artikel)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Tampilkan gambar -->
                    <img src="{{ asset($artikel->gambar) }}" class="card-img-top" alt="{{ $artikel->judul }}">

                    <div class="card-body">
                        <!-- Tampilkan judul -->
                        <h5 class="card-title">{{ $artikel->judul }}</h5>

                        <!-- Tampilkan deskripsi singkat -->
                        <p class="card-text">{{ Str::limit($artikel->konten, 100) }}</p>

                        <!-- Tampilkan tombol untuk melihat detail artikel -->
                        <a href="{{ route('artikel.show-user', ['id' => $artikel->id]) }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
