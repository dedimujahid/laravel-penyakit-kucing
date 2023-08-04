<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\RiwayatKonsultasi;
use Illuminate\Http\Request;
use PDF;

class PrintPDFController extends Controller
{
    public function printPDF($id)
    {
        $riwayatKonsultasi = RiwayatKonsultasi::findOrFail($id);
        $gejalaIds         = explode(',', $riwayatKonsultasi->gejala_ids);

        $gejalaTerpilih = Gejala::whereIn('id', $gejalaIds)->get();

          // Ambil nama penyakit dan penanganan dari gejala yang dipilih
        $namaPenyakit = $gejalaTerpilih->pluck('nama_penyakit')->implode(', ');
        $penanganan   = $gejalaTerpilih->pluck('penanganan')->implode(', ');

        $data = [
            'konsultasi'     => $riwayatKonsultasi,
            'gejalaTerpilih' => $gejalaTerpilih,
            'namaPenyakit'   => $namaPenyakit,
            'penanganan'     => $penanganan,
        ];

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.konsultasi', $data);

          // Optional: Set nama file saat diunduh
        $pdf->setPaper('A4', 'portrait');
        $pdf->setOption('margin-top', 20);
        $pdf->setOption('margin-right', 20);
        $pdf->setOption('margin-bottom', 20);
        $pdf->setOption('margin-left', 20);

        return $pdf->stream('hasil_konsultasi.pdf');
    }

    public function printAllPDF()
    {
        $riwayatKonsultasis = RiwayatKonsultasi::all();
        $data = ['riwayatKonsultasis' => $riwayatKonsultasis];

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.all_konsultasi', $data);

        // Optional: Set nama file saat diunduh
        $pdf->setPaper('A4', 'portrait');
        $pdf->setOption('margin-top', 20);
        $pdf->setOption('margin-right', 20);
        $pdf->setOption('margin-bottom', 20);
        $pdf->setOption('margin-left', 20);

        return $pdf->stream('semua_riwayat_konsultasi.pdf');
    }
    
}
