@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Artikel</h1>
        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $artikel->judul }}">
            </div>
            <div class="form-group">
                <label for="isi">Isi Artikel</label>
                <textarea class="form-control" id="isi" name="isi" rows="8">{{ $artikel->isi }}</textarea>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis Artikel</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $artikel->penulis }}">
            </div>
            <div class="form-group">
                <label for="tanggal_publikasi">Tanggal Publikasi</label>
                <input type="date" class="form-control" id="tanggal_publikasi" name="tanggal_publikasi" value="{{ $artikel->tanggal_publikasi }}">
            </div>
            @if ($artikel->gambar)
                <div class="form-group">
                    <label for="gambar">Gambar Artikel</label>
                    <img src="{{ asset($artikel->gambar) }}" alt="{{ $artikel->judul }}" style="max-width: 400px;">
                </div>
            @endif
            <div class="form-group">
                <label for="gambar">Ganti Gambar Artikel</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Update Artikel</button>
        </form>
    </div>
@endsection
