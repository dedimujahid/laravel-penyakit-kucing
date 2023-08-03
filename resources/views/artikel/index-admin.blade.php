<!-- resources/views/artikel/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class = "container">
    <h2>Daftar Artikel</h2>

    <a href = "{{ route('artikel.create') }}" class = "btn btn-primary mb-2">Tambah Artikel Baru</a>

    @if(count($artikels) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tanggal Publikasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikels as $artikel)
            <tr>
                <td>{{ $artikel->id }}</td>
                <td>{{ $artikel->judul }}</td>
                <td>{{ $artikel->penulis }}</td>
                <td>{{ $artikel->tanggal_publikasi }}</td>
                <td>
                    <a href="{{ route('artikel.show', ['id' => $artikel->id]) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('artikel.edit', ['id' => $artikel->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('artikel.destroy', ['id' => $artikel->id]) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Tidak ada artikel.</p>
    @endif
</div>
@endsection
