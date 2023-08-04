@extends('layouts.app')

@section('content')
<div class = "container">
<div class = "row justify-content-center">
<div class = "col-md-8">
<div class = "card">
<div class = "card-header">{{ __('Hasil Konsultasi Penyakit Kucing') }}</div>

                <div class = "card-body">
                    <p>{{ $hasilDeteksi }}</p>
        <p>Nama Kucing        : {{ $cat_name }}</p>
        <p>Usia Kucing (bulan): {{ $age }}</p>
                    
       
        @if($pilihangejala->isNotEmpty())
            <p>Nama Penyakit     : {{ $pilihangejala->first()->nama_penyakit }}</p>
                    <p>Penanganan: {{ $pilihangejala->first()->penanganan }}</p>
        @else
            <p>Tidak ada data gejala yang dipilih.</p>
        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
