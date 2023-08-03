<!-- resources/views/artikel/create.blade.php -->
<!-- resources/views/artikel/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Buat Artikel Baru</h2>

    <form action="{{ route('artikel.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input type="text" id="judul" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis Artikel</label>
            <input type="text" id="penulis" name="penulis" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="konten">Konten Artikel</label>
            <textarea id="konten" name="konten" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="tanggal_publikasi">Tanggal Publikasi</label>
            <input type="date" id="tanggal_publikasi" name="tanggal_publikasi" class="form-control" required>
        </div>
        
        @csrf
        <!-- ... -->
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" id="gambar" name="gambar" class="form-control">
        </div>
        <!-- ... -->
        
        <button type="submit" class="btn btn-primary">Simpan Artikel</button>
    </form>
</div>
@endsection

