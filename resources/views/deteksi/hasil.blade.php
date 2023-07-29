<!-- hasil.blade.php -->
@extends('layouts.app')

@section('content')
    <div class = "container">
        <h2>Hasil Deteksi Penyakit Kucing</h2>
        <p>Nama   Kucing        : {{ $cat_name }}</p>
        <p>Usia   Kucing (bulan): {{ $age }}</p>
        <p>Gejala yang Dipilih  : </p>
        <ul>
            @foreach ($selectedGejala as $gejala)
                <li>{{ $gejala->nama_gejala }}</li>
            @endforeach
        </ul>
        <h3>Hasil Deteksi: </h3>
        <p>{{ $hasilDeteksi }}</p>

        <!-- Tambahkan bagian untuk menampilkan data nama_penyakit dan penanganan -->
        <h3>Diagnosa: </h3>
        <p>Nama Penyakit: {{ $diagnosis->nama_penyakit }}</p>
        <p>Penanganan: {{ $diagnosis->penanganan }}</p>
    </div>
@endsection
