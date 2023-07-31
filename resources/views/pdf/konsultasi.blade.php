<!-- resources/views/pdf/konsultasi.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Konsultasi</title>
</head>
<body>
    <h1>Riwayat Konsultasi</h1>
    <p>Nama   Kucing        : {{ $konsultasi->cat_name }}</p>
    <p>Usia   Kucing (bulan): {{ $konsultasi->age }}</p>
    <p>Hasil   Deteksi      : {{ $konsultasi->hasil_deteksi }}</p>
    <p>Nama    Penyakit     : {{ $namaPenyakit }}</p>
               <p>Penanganan: {{ $penanganan }}</p>
               <p>Username  : {{ Auth::user()->name }}</p>
    <p>Tanggal Cetak        : {{ date('Y-m-d') }}</p>
    <p>Waktu   Cetak        : {{ date('H:i:s') }}</p>
</body>
</html>
