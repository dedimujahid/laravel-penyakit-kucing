<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class ArtikelController extends Controller
{
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            // Tampilkan view index-admin.blade.php untuk role admin
            $artikels = Artikel::all();
            return view('artikel.index-admin', compact('artikels'));
        } else {
            // Tampilkan view index-user.blade.php untuk role user
            $artikels = Artikel::all();
            return view('artikel.index-user', compact('artikels'));
        }
    }

    //sebenarnya show tidak perlu dipisah bisa dijadikan satu seperti codingan awal
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id); // untuk  mengambil artikel berdasarkan ID yang diberikan dan mengirimkannya ke view

        if (!$artikel) {
            abort(404);
        }

        if (Auth::user()->isAdmin()) {
            // Tampilkan view show-admin.blade.php untuk role admin
            return view('artikel.show-admin', compact('artikel'));
        } else {
            // Tampilkan view show-user.blade.php untuk role user
            return view('artikel.show-user', compact('artikel'));
        }
    }
    // codingan awal semua bisa mengakses tanpa memilih role
    // public function index()
    // {
    //     // Ambil semua data artikel dari database
    //     $artikels = Artikel::all();

    //     // Tampilkan view index.blade.php dan lewatkan data artikel
    //     return view('artikel.index', compact('artikels'));
    // }
    // public function create()
    // {
    //     // Tampilkan view create.blade.php untuk membuat artikel baru
    //     return view('artikel.create');
    // }

    // public function show($id)
    // {
    //       // Mengambil data artikel berdasarkan ID dari database
    // $artikel = Artikel::find($id);

    // // Pastikan artikel ditemukan sebelum menampilkan view
    // if (!$artikel) {
    //     abort(404); // Atau tampilkan pesan error jika artikel tidak ditemukan
    // }

    // // Tampilkan view show.blade.php dan lewatkan data artikel
    // return view('artikel.show', compact('artikel'));
    // }
    
    public function search(Request $request)
    {
            // Ambil keyword pencarian dari query parameter 'keyword'
        $keyword = $request->query('keyword');

        // Lakukan query ke database untuk mencari artikel berdasarkan judul yang mengandung keyword
        $artikels = Artikel::where('judul', 'like', '%' . $keyword . '%')->get();

        // Tampilkan view hasil pencarian dan lewatkan data artikel yang ditemukan
        return view('artikel.search', compact('artikels', 'keyword'));
    }
    
    public function store(Request $request)
    {
          // Validasi data yang dikirim dari form
        $request->validate([
            'judul'             => 'required',
            'penulis'           => 'required',
            'konten'            => 'required',
            'tanggal_publikasi' => 'required|date',
            'gambar'  => 'required',
        ]);

        // Simpan data artikel ke dalam database
        Artikel::create([
            'judul'             => $request->judul,
            'penulis'           => $request->penulis,
            'konten'            => $request->konten,
            'tanggal_publikasi' => $request->tanggal_publikasi,
            'gambar' => $request->gambar,
        ]);

        // Redirect pengguna ke halaman daftar artikel setelah berhasil menyimpan artikel
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil disimpan.');

        // Fungsi-fungsi lain...
    }

    public function update(Request $request, $id)
    {
        $artikel = Artikel::find($id);
        // Fungsi-fungsi lain...

        if ($request->hasFile('gambar')) {
            Storage::delete('public/gambar_artikel/' . basename($artikel->gambar));
            $path = $request->file('gambar')->store('public/gambar_artikel');
            $artikel->gambar = Storage::url($path);
            $artikel->save();
        }

        // Fungsi-fungsi lain...
    }
    public function destroy($id)
    {
        // Temukan artikel berdasarkan ID
        $artikel = Artikel::find($id);

        // Periksa apakah artikel ditemukan
        if (!$artikel) {
            return redirect()->route('artikel.index')->with('error', 'Artikel tidak ditemukan.');
        }

        // Hapus artikel
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
