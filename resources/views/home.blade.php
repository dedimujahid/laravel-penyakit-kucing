@extends('layouts.app')

@section('content')
<div class = "container">
<div class = "row justify-content-center">
<div class = "col-md-8">
<div class = "card">
<div class = "card-header">{{ __('Dashboard') }}</div>

                <div class = "card-body">
                    @if (session('status'))
                        <div class = "alert alert-success" role = "alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('Welcome, :user!', ['user' => Auth::user()->name]) }}</p>
                    <p>{{ __('You are logged in as a user!') }}</p>

                    <!-- Add more personalized user information, actions, or content here -->
                </div>
            </div>
        </div>
    </div>

    <div class = "row mt-4">
    <div class = "col-md-4">
    <div class = "card">
    <div class = "card-header">{{ __('Jenis-jenis Penyakit') }}</div>
    <div class = "card-body">
                    <ul>
                        @foreach ($gejala_kucing as $penyakit)
                            <li>{{ $penyakit->nama_penyakit }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class = "col-md-4">
        <div class = "card">
        <div class = "card-header">{{ __('Daftar Gejala Penyakit') }}</div>
        <div class = "card-body">
                    <ul>
                        @foreach ($gejala_kucing as $gejala)
                        <!-- Tampilkan deskripsi singkat -->
                        <li class="card-text">{{ Str::limit($gejala->gejala, 50) }}</li>
                            <!-- <li>{{ $gejala->gejala }}</li> -->
                        @endforeach
                        <!-- Tampilkan tombol untuk melihat detail artikel -->
                        <a href="" class="btn btn-primary">Selengkapnya</a>
                    </ul>
                </div>
            </div>
        </div>

        <div class = "col-md-4">
        <div class = "card">
        <div class = "card-header">{{ __('Konsultasi Penyakit') }}</div>
        <div class = "card-body">
                    <!-- Isi dengan informasi untuk melakukan konsultasi penyakit -->
                </div>
            </div>
        </div>
    </div>

    <div class = "row mt-4">
    <div class = "col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Riwayat Konsultasi') }}</div>
                <div class="card-body">
                    <!-- Isi dengan informasi riwayat konsultasi -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
