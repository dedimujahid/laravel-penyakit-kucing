
tidak digunakan sementara karena sudah ada fitur konsultasi

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Diagnose; // Ganti dengan model Diagnosis yang sesuai

class DeteksiController extends Controller
{
    public function showForm()
    {
        $gejala = Gejala::all();
        return view('deteksi.form', compact('gejala'));
    }

    public function deteksi(Request $request)
    {
          // Validasi data yang diterima dari form
        $request->validate([
            'cat_name'     => 'required|string|max:255',
            'age'          => 'required|integer',
            'gejala_ids'   => 'required|array',
            
        ]);

          // Ambil data gejala berdasarkan gejala_ids yang dipilih
        $selectedGejala = Gejala::whereIn('id', $request->gejala_ids)->get();

          // Lakukan proses deteksi penyakit berdasarkan gejala yang dipilih
        $hasilDeteksi    = $this->prosesDeteksi($selectedGejala);
        // $deteksipenyakit = $this->prosesDeteksi($selectedGejala);
        // $rekomendasipenanganan = $this->prosesDeteksi($selectedGejala);
          // Simpan hasil deteksi ke dalam database (Opsional)
          $diagnosis = Diagnose::create([
            'cat_name'      => $request->cat_name,
            'age'           => $request->age,
            'gejala_ids'    => implode(',', $request->gejala_ids),
            'hasil_deteksi' => $hasilDeteksi,
            // 'nama_penyakit' => $deteksipenyakit, // Di sini Anda perlu mengisi dengan data nama_penyakit yang sesuai
            // 'penanganan' => $rekomendasipenanganan, // Di sini Anda perlu mengisi dengan data penanganan yang sesuai
        ]);
        // Kirim data hasil diagnosa ke view hasil.blade.php
        return view('deteksi.hasil', [
          'hasilDeteksi'   => $hasilDeteksi,
          'cat_name'       => $request->cat_name,
          'age'            => $request->age,
          'selectedGejala' => $selectedGejala,
          'diagnosis' => $diagnosis,
        ]);

    }

    private function prosesDeteksi($selectedGejala)
    {
        // Lakukan logika deteksi penyakit berdasarkan gejala yang dipilih
        // Implementasikan algoritma atau metode deteksi sesuai kebutuhan Anda
        // Contoh sederhana, misalnya kita akan menampilkan nama gejala yang dipilih

        $hasilDeteksi = 'Gejala yang dipilih: ';
        foreach ($selectedGejala as $gejala) {
            $hasilDeteksi .= $gejala->nama_gejala . ', ';
        }
        $hasilDeteksi = rtrim($hasilDeteksi, ', ');

        return $hasilDeteksi;
    }
}


