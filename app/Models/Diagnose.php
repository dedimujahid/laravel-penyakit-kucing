<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{
    use HasFactory;

    protected $table = 'diagnoses'; // Nama tabel 'diagnoses' sesuai dengan yang Anda definisikan dalam migrasi
    protected $primaryKey = 'id'; // Primary key dari tabel 'diagnoses', misalnya 'id'
    
    protected $fillable = [
        'cat_name', 'age', 'gejala_ids', 'hasil_deteksi', 
    ];
    public function gejala()
    {
        // Relasi many-to-many dengan model Gejala berdasarkan gejala_ids
        return $this->belongsToMany(Gejala::class, 'gejala_kucing', 'id', 'gejala_ids');
    }
}
