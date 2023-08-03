<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Ambil data gejala yang telah dilakukan oleh pengguna
        $gejala_kucing = Gejala::all(); // Ubah sesuai dengan model yang sesuai

        return view('admin.dashboard', compact('gejala_kucing'));
    }
}
