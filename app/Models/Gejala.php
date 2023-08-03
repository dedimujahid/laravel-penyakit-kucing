<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala_kucing'; // Nama tabel gejala_kucing sesuai dengan yang telah Anda buat.
    protected $primaryKey = 'id'; // Primary key dari tabel gejala_kucing, misalnya 'id'.
    
    protected $fillable = ['nama_penyakit', 'gejala', 'penanganan'];
}

