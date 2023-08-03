<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Diagnose;
use App\Models\RiwayatKonsultasi;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    public function showForm()
    {
        $gejala_kucing = Gejala::all();
        return view('konsultasi', compact('gejala_kucing'));
    }
        public function prosesKonsultasi(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'cat_name'   => 'required|string|max:255',
            'age'        => 'required|integer',
            'gejala_ids' => 'required|array',
        ]);

        // Ambil data gejala berdasarkan gejala_ids yang dipilih
        $selectedGejala = Gejala::whereIn('id', $request->gejala_ids)->get();

        // Lakukan proses deteksi penyakit berdasarkan gejala yang dipilih
        $hasilDeteksi = $this->prosesDeteksi($selectedGejala);

        // Ambil nama penyakit dan penanganan dari gejala yang dipilih
        $namaPenyakit = $selectedGejala->pluck('nama_penyakit')->implode(', ');
        $penanganan = $selectedGejala->pluck('penanganan')->implode(', ');

        // Simpan hasil konsultasi ke dalam database
        $riwayatKonsultasi = RiwayatKonsultasi::create([
            'cat_name'      => $request->cat_name,
            'age'           => $request->age,
            'gejala_ids'    => implode(',', $request->gejala_ids),
            'hasil_deteksi' => $hasilDeteksi,
            'nama_penyakit' => $namaPenyakit,
            'penanganan'    => $penanganan,
        ]);

        // Tampilkan halaman hasil konsultasi
        return view('hasil_konsultasi', [
            'hasilDeteksi'  => $hasilDeteksi,
            'pilihangejala' => $selectedGejala,
            'cat_name'      => $request->cat_name,
            'age'           => $request->age,
        ]);
    }
        public function showRiwayatKonsultasi()
    {
        $riwayatKonsultasi = RiwayatKonsultasi::all();

        return view('riwayat_konsultasi', [
            'riwayatKonsultasi' => $riwayatKonsultasi,
        ]);
    }

    public function showHasilKonsultasi(Request $request, $id)
    {
        $riwayatKonsultasi = RiwayatKonsultasi::findOrFail($id);
        $gejalaIds         = explode(',', $riwayatKonsultasi->gejala_ids);
        

        $riwayatKonsultasiIdsArray = $request->gejala_ids;
        $gejalaTerpilih = Gejala::whereIn('id', $riwayatKonsultasiIdsArray)->get();
        // $gejalaTerpilih = Gejala::find($riwayatkonsultasi->gejala_id);

        return view('hasil_konsultasi', [
            'konsultasi'     => $riwayatKonsultasi,       // Tambahkan variabel $konsultasi agar bisa diakses di view
            'gejalaTerpilih' => $gejalaTerpilih,

        ]);
    }

    private function prosesDeteksi($selectedGejala)
    {
        // Lakukan logika deteksi penyakit berdasarkan gejala yang dipilih
        // Implementasikan algoritma atau metode deteksi sesuai kebutuhan Anda
        // Contoh sederhana, misalnya kita akan menampilkan nama gejala yang dipilih

        $hasilDeteksi = 'Gejala yang dipilih: ';
        foreach ($selectedGejala as $gejala) {
            $hasilDeteksi .= $gejala->gejala . ', ';
        }
        $hasilDeteksi = rtrim($hasilDeteksi, ', ');

        return $hasilDeteksi;
    }
}



    // public function prosesKonsultasi(Request $request)
    // {
    //     // Validasi data yang diterima dari form
    //     $request->validate([
    //         'cat_name'   => 'required|string|max:255',
    //         'age'        => 'required|integer',
    //         'gejala_ids' => 'required|array',
    //     ]);

    //       // Ambil data gejala berdasarkan gejala_ids yang dipilih
    //     $selectedGejala = Gejala::whereIn('id', $request->gejala_ids, )->get();

    //     // Lakukan proses deteksi penyakit berdasarkan gejala yang dipilih
    //     $hasilDeteksi = $this->prosesDeteksi($selectedGejala);

    //     // Simpan hasil konsultasi ke dalam database
    //     $riwayatKonsultasi = RiwayatKonsultasi::create([
    //         'cat_name'      => $request->cat_name,
    //         'age'           => $request->age,
    //         'gejala_ids'    => implode(',', $request->gejala_ids),
    //         'hasil_deteksi' => $hasilDeteksi,
    //     ]);
    //     // Ubah gejala_ids menjadi array dari ID
    //     $gejalaIdsArray = $request->gejala_ids;

    //     // Ambil data gejala berdasarkan gejala_ids yang dipilih
    //     $pilihangejala = Gejala::whereIn('id', $gejalaIdsArray)->get();

    //     // Tampilkan halaman hasil konsultasi
    //     return view('hasil_konsultasi', [
    //       'hasilDeteksi'  => $hasilDeteksi,
    //       'pilihangejala' => $pilihangejala,
    //       'cat_name'      => $request->cat_name,
    //       'age'           => $request->age,
    //     ]);
    // }