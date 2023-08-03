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
                <div class="card-header">{{ __('Daftar Gejala Penyakit') }}</div>
                <div class="card-body">
                    <ul>
                        @foreach ($gejala_kucing as $gejala)
                            <li>
                                <!-- Deskripsi singkat ditampilkan -->
                                <span class="description">{{ Str::limit($gejala->gejala, 45) }}</span>

                                <!-- Deskripsi lengkap diberikan class 'collapsed' untuk disembunyikan secara default -->
                                <span class="description collapsed d-none">{{ $gejala->gejala }}</span>
                            </li>
                        @endforeach
                    <!-- Tombol 'Selengkapnya' -->
                    <a href = "#" class = "btn btn-primary btn-toggle">Selengkapnya</a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('Konsultasi Penyakit') }}</div>
                <div class="card-body">
                    <p>Untuk melakukan konsultasi penyakit kucing, klik tombol di bawah ini: </p>
                    <a href="{{ route('konsultasi.form') }}" class="btn btn-primary">Konsultasi Sekarang</a>
                </div>
            </div>
        </div>
    
    <div class="col-md-2">
    <div class = "card">
        <div class = "card-header">{{ __('Riwayat Konsultasi') }}</div>
            <div class = "card-body">
                <p>Untuk Melihat Seluruh Riwayat Konsultasi penyakit kucing, klik tombol di bawah ini: </p>
                <a href = "{{ route('riwayat_konsultasi') }}" class = "btn btn-primary">Riwayat Konsultasi</a>
            </div>
        </div>

        <div class = "row-mt-2">
        <div class = "card">
        <div class = "card-header">{{ __('Wawasan Artikel') }}</div>
        <div class = "card-body">
                <p>Untuk Melihat Seluruh Artikel, klik tombol di bawah ini: </p>
                <a href = "{{ route('artikel.index-admin') }}" class = "btn btn-primary">Baca Artikel</a>
            </div>
        </div>
    


</div>

<script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.btn-toggle').on('click', function (e) {
            e.preventDefault();
            const listItem = $(this).closest('ul');
            const description = listItem.find('.description');

            if (description.hasClass('collapsed')) {
                // Jika deskripsi sedang tersembunyi, tampilkan selengkapnya
                description.removeClass('collapsed');
                $(this).text('Tutup');
            } else {
                // Jika deskripsi sedang ditampilkan, sembunyikan kembali
                description.addClass('collapsed');
                $(this).text('Selengkapnya');
            }
        });
    });
</script>

@endsection
