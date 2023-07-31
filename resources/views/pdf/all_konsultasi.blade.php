<!-- resources/views/pdf/all_konsultasi.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Semua Riwayat Konsultasi</title>
</head>
<body>
    <h1>Semua Riwayat Konsultasi</h1>
    @foreach($riwayatKonsultasis as $konsultasi)
        <p>Nama Kucing: {{ $konsultasi->cat_name }}</p>
        <p>Usia Kucing (bulan): {{ $konsultasi->age }}</p>
        <p>Hasil Deteksi: {{ $konsultasi->hasil_deteksi }}</p>
        <p>Nama Penyakit: {{ $konsultasi->nama_penyakit }}</p>
        <p>Penanganan: {{ $konsultasi->penanganan }}</p>
        <p>Username: {{ Auth::user()->name }}</p>
        <p>Tanggal Cetak: {{ date('Y-m-d') }}</p>
        <p>Waktu Cetak: {{ date('H:i:s') }}</p>
        <br>
    @endforeach
</body>
</html>
