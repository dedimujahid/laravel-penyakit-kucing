<?php

namespace App\Http\Controllers;

use App\Models\Diagnose;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Ambil data gejala yang telah dilakukan oleh pengguna
        $dataDiagnose = Diagnose::all(); // Ubah sesuai dengan model yang sesuai

        return view('admin.dashboard', compact('dataDiagnose'));
    }
}
