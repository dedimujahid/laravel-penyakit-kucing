<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class = "container">
    <h2>Dashboard Admin</h2>
    <table class = "table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kucing</th>
                <th>Usia Kucing (bulan)</th>
                <th>Gejala yang Dialami</th>
                <th>Deskripsi Penyakit</th>
                <th>Tanggal Deteksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataDiagnose as $diagnose)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $diagnose->cat_name }}</td>
                <td>{{ $diagnose->age }}</td>
                <td>
                    @php
                        $gejalaIds = explode(',', $diagnose->gejala_ids);
                    @endphp
                    @foreach ($gejalaIds as $nama_penyakit)
                        {{ $nama_penyakit }}<br>
                    @endforeach
                </td>

                <td>{{ $diagnose->deskripsi }}</td>
                <td>{{ $diagnose->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
