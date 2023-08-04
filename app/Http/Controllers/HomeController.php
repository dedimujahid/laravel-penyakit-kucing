<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\RiwayatKonsultasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          // Retrieve data from the gejala_kucing table
        $gejala_kucing = Gejala::all();

        $riwayatKonsultasi = RiwayatKonsultasi::all();

        // Pass the data to the view using the compact function
        return view('home', compact('gejala_kucing','riwayatKonsultasi'));
    }
}
