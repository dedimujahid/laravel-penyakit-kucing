<!-- resources/views/riwayat_konsultasi.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Riwayat Konsultasi') }}</div>
                <div class="card-body">
                    @if($riwayatKonsultasi->count() > 0)
                        <ul>
                            @foreach($riwayatKonsultasi as $konsultasi)
                                <li class="card-header"> 
                                    Nama Kucing: {{ $konsultasi->cat_name }} <br>
                                    Usia Kucing (bulan): {{ $konsultasi->age }} <br>
                                    Gejala yang Dipilih: 
                                    @foreach (explode(',', $konsultasi->gejala_ids) as $gejalaId)
                                        {{ App\Models\Gejala::find($gejalaId)->gejala }},
                                    @endforeach
                                    <br>
                                    Hasil Deteksi: {{ $konsultasi->hasil_deteksi }}
                                    <br>
                                    Nama Penyakit: {{ $konsultasi->nama_penyakit }}
                                    <br>
                                    Penanganan: {{ $konsultasi->penanganan }}
                                    <br>
                                    <a href="{{ route('print_pdf', ['id' => $konsultasi->id]) }}" class="btn btn-primary">Cetak PDF</a>
                                    <hr>
                                </li>
                            @endforeach
                            <a href="{{ route('print_all_pdf') }}" class="btn btn-primary">
                                    <i class = "fas fa-print"></i> Cetak Riwayat
                                    </a>
                        </ul>
                    @else
                        <p>Tidak ada riwayat konsultasi.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
